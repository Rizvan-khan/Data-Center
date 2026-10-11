<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageFaq;
use App\Support\WebsitePages;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FaqController extends Controller
{
    public function pages()
    {
        $counts = PageFaq::selectRaw('page_path, COUNT(*) as total')->groupBy('page_path')->pluck('total', 'page_path');
        return view('Admin.Faqs.pages', ['pages' => WebsitePages::all(), 'counts' => $counts]);
    }

    public function index(Request $request)
    {
        $query = PageFaq::orderBy('page_path')->orderBy('position')->orderBy('id');
        if ($request->filled('page')) $query->where('page_path', $request->string('page')->toString());
        return view('Admin.Faqs.index', ['items' => $query->paginate(20)->withQueryString(), 'pages' => WebsitePages::all()]);
    }

    public function create(Request $request)
    {
        return $this->form(new PageFaq(['page_path' => $request->query('page'), 'position' => 0, 'is_active' => true]));
    }

    public function edit(PageFaq $faq) { return $this->form($faq); }

    private function form(PageFaq $faq)
    {
        return view('Admin.Faqs.form', ['item' => $faq, 'pages' => WebsitePages::all()]);
    }

    public function store(Request $request) { return $this->save($request, new PageFaq()); }
    public function update(Request $request, PageFaq $faq) { return $this->save($request, $faq); }

    private function save(Request $request, PageFaq $faq)
    {
        $data = $request->validate([
            'page_path' => ['required', 'string', Rule::in(array_keys(WebsitePages::all()))],
            'question' => 'required|string|max:500',
            'answer' => 'required|string|max:20000',
            'position' => 'required|integer|min:0|max:9999',
            'is_active' => 'required|boolean',
        ]);
        $faq->fill($data)->save();
        return redirect()->route('admin.faqs.index', ['page' => $faq->page_path])->with('success', 'FAQ saved.');
    }

    public function visibility(Request $request, PageFaq $faq)
    {
        $faq->update($request->validate(['is_active' => 'required|boolean']));
        return redirect()->route('admin.faqs.index', ['page' => $faq->page_path])->with('success', 'FAQ visibility updated.');
    }

    public function destroy(PageFaq $faq)
    {
        $page = $faq->page_path;
        $faq->delete();
        return redirect()->route('admin.faqs.index', ['page' => $page])->with('success', 'FAQ deleted.');
    }
}
