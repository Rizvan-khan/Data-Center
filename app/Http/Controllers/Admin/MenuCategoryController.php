<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu\Menu;
use App\Models\Menu\MenuCategory;
use App\Models\Menu\Submenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MenuCategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = MenuCategory::with('menu')->orderBy('menu_slug')->orderBy('position');
        if ($request->filled('parent')) $query->where('menu_slug', $request->string('parent')->toString());
        return view('Admin.Navigation.categories', ['categories'=>$query->get(), 'menus'=>Menu::orderBy('position')->get()]);
    }
    public function store(Request $request) { return $this->save($request, new MenuCategory()); }
    public function update(Request $request, MenuCategory $category) { return $this->save($request, $category); }
    private function save(Request $request, MenuCategory $category)
    {
        $data = $request->validate(['menu_slug'=>['required', Rule::exists('menus','slug')], 'name'=>['required','string','max:100', Rule::unique('menu_categories','name')->where('menu_slug', $request->input('menu_slug'))->ignore($category->id)], 'position'=>'required|integer|min:0|max:9999','is_active'=>'required|boolean']);
        DB::transaction(function () use ($data, $category) {
            $oldName=$category->name; $oldParent=$category->menu_slug;
            $category->fill($data)->save();
            if ($oldName) Submenu::where('menu-slug', $oldParent)->where('category', $oldName)->update(['menu-slug'=>$category->menu_slug, 'category'=>$category->name]);
        });
        return back()->with('success','Category saved.');
    }
    public function destroy(MenuCategory $category)
    {
        DB::transaction(function () use ($category) {
            Submenu::where('menu-slug', $category->menu_slug)->where('category', $category->name)->update(['category'=>null]);
            $category->delete();
        });
        return back()->with('success','Category removed. Its page links are now ungrouped.');
    }
}
