<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable = ['menu-slug', 'submenu', 'status', 'submenu-slug', 'image', 'description'];

    public function menu()
    {

        return $this->belongsTo(Menu::class, 'menuslug', 'slug');
    }
}