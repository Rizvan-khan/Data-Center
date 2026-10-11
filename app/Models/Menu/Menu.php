<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'submenu', 'status', 'position', 'slug', 'url'];

    public function submenus()
    {
        return $this->hasMany(Submenu::class, 'menu-slug', 'slug');
    }
    public function categories() { return $this->hasMany(MenuCategory::class, 'menu_slug', 'slug')->orderBy('position')->orderBy('id'); }
}
