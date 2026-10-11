<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu\Menu;
use App\Models\Menu\Submenu;
use App\Models\Menu\MenuCategory;
use App\Support\WebsitePages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class NavigationController extends Controller
{
    public function index(Request $request)
    {
        $query = Submenu::with('menu')->orderBy('menu-slug')->orderBy('position')->orderBy('id');
        if ($request->filled('parent')) {
            $query->where('menu-slug', $request->string('parent')->toString());
        }
        if ($request->filled('search')) {
            $query->where('submenu', 'like', '%'.$request->string('search')->toString().'%');
        }
        return view('Admin.Navigation.index', ['items' => $query->paginate(20)->withQueryString(), 'menus' => Menu::orderBy('position')->get()]);
    }

    public function create()
    {
        return $this->form(new Submenu(['status' => 1, 'position' => 0, 'icon' => 'la-link']));
    }

    public function edit(Submenu $submenu)
    {
        return $this->form($submenu);
    }

    private function form(Submenu $submenu)
    {
        $pages = ['business-services' => 'Business Solutions', 'about-us' => 'About Us', 'contact' => 'Contact Us', 'partners' => 'Partners', 'industries' => 'Industries', 'pricing' => 'Pricing'];
        foreach (Submenu::all() as $item) {
            $pages[$item->{'submenu-slug'}] = $item->submenu;
        }
        foreach (config('business_services') as $services) {
            foreach ($services as $service) {
                $pages[$service[0]] = $service[1];
            }
        }
        return view('Admin.Navigation.form', ['item' => $submenu, 'menus' => Menu::orderBy('position')->get(), 'pages' => $pages, 'categories' => MenuCategory::orderBy('position')->get()]);
    }

    public function store(Request $request)
    {
        return $this->save($request, new Submenu());
    }

    public function update(Request $request, Submenu $submenu)
    {
        return $this->save($request, $submenu);
    }

    private function save(Request $request, Submenu $submenu)
    {
        $data = $request->validate([
            'menuslug' => ['required', Rule::exists('menus', 'slug')],
            'submenu' => 'required|string|max:255',
            'destination' => ['required', 'string', 'max:255', 'regex:~^(?:/|/?(?!/)[a-zA-Z0-9_/#?=&%.\-]+)$~'],
            'description' => 'nullable|string|max:1000',
            'category' => 'nullable|string|max:100',
            'icon' => ['nullable', 'regex:/^la-[a-z0-9-]+$/'],
            'position' => 'required|integer|min:0|max:9999',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'remove_image' => 'nullable|boolean',
        ]);
        $values = ['menu-slug' => $data['menuslug'], 'submenu' => $data['submenu'], 'submenu-slug' => ltrim($data['destination'], '/') ?: '/', 'description' => $data['description'] ?? null, 'category' => $data['category'] ?? null, 'icon' => $data['icon'] ?? 'la-link', 'position' => $data['position'], 'status' => $data['status']];
        if ($request->boolean('remove_image')) {
            $values['image'] = null;
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Str::uuid().'.'.$file->extension();
            $file->move(public_path('menu-images'), $filename);
            $values['image'] = 'menu-images/'.$filename;
        }
        DB::transaction(function () use ($submenu, $values) {
            if (!empty($values['category'])) MenuCategory::firstOrCreate(['menu_slug'=>$values['menu-slug'], 'name'=>$values['category']], ['position'=>0, 'is_active'=>true]);
            $submenu->fill($values)->save();
        });
        return redirect()->route('admin.submenus.index')->with('success', 'Submenu saved. Website navigation has been updated.');
    }

    public function visibility(Request $request, Submenu $submenu)
    {
        $data = $request->validate(['status' => 'required|boolean']);
        $submenu->update($data);
        return back()->with('success', 'Submenu visibility updated.');
    }

    public function destroy(Submenu $submenu)
    {
        $submenu->delete();
        return redirect()->route('admin.submenus.index')->with('success', 'Submenu removed from navigation. The page is unchanged.');
    }

    public function menus()
    {
        return view('Admin.Navigation.menus', ['menus' => Menu::withCount('submenus')->orderBy('position')->get()]);
    }

    public function menuForm(?Menu $menu = null)
    {
        return view('Admin.Navigation.menu-form', ['item' => $menu && $menu->exists ? $menu : new Menu(['status' => 1, 'submenu' => 1, 'position' => 0, 'url'=>'/']), 'pages'=>WebsitePages::all()]);
    }

    public function storeMenu(Request $request)
    {
        return $this->saveMenu($request, new Menu());
    }

    public function updateMenu(Request $request, Menu $menu)
    {
        return $this->saveMenu($request, $menu);
    }

    private function saveMenu(Request $request, Menu $menu)
    {
        $data = $request->validate([
            'name'=>'required|string|max:100',
            'slug'=>['required','string','max:255','regex:/^[a-z0-9-]+$/', Rule::unique('menus','slug')->ignore($menu->id)],
            'url'=>['required','string','max:255','regex:~^(?:/|/?(?!/)[a-zA-Z0-9_/#?=&%.\-]+)$~'],
            'position'=>'required|integer|min:0|max:9999','status'=>'required|boolean','submenu'=>'required|boolean',
            'children'=>'nullable|array|max:30',
            'children.*.page'=>['required','string','distinct',Rule::in(array_keys(WebsitePages::all()))],
            'children.*.category'=>'nullable|string|max:100',
            'children.*.icon'=>['required','regex:/^la-[a-z0-9-]+$/'],
        ]);
        if (!empty($data['children']) && !$data['submenu']) throw \Illuminate\Validation\ValidationException::withMessages(['submenu'=>'Enable submenus to attach pages.']);
        DB::transaction(function () use ($data, $menu) {
            $oldSlug = $menu->slug;
            $menu->fill(\Illuminate\Support\Arr::except($data, ['children']))->save();
            if ($oldSlug && $oldSlug !== $menu->slug) {
                Submenu::where('menu-slug', $oldSlug)->update(['menu-slug' => $menu->slug]);
                MenuCategory::where('menu_slug', $oldSlug)->update(['menu_slug'=>$menu->slug]);
            }
            $pages = WebsitePages::all();
            $position = (int) $menu->submenus()->max('position') + 1;
            foreach ($data['children'] ?? [] as $child) {
                $category = $child['category'] ?? null;
                if ($category) MenuCategory::firstOrCreate(['menu_slug'=>$menu->slug,'name'=>$category], ['position'=>0,'is_active'=>true]);
                Submenu::firstOrCreate(['menu-slug'=>$menu->slug,'submenu-slug'=>ltrim($child['page'],'/') ?: '/'], ['submenu'=>$pages[$child['page']],'category'=>$category,'icon'=>$child['icon'],'position'=>$position++,'status'=>1]);
            }
        });
        return redirect()->route('admin.menus.index')->with('success', 'Menu saved.');
    }
}
