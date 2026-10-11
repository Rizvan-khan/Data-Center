<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    protected $fillable = ['menu_slug', 'name', 'position', 'is_active'];
    public function menu() { return $this->belongsTo(Menu::class, 'menu_slug', 'slug'); }
}
