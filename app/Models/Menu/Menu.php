<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'submenu', 'status', 'position', 'slug'];

    public function submenus()
    {
        return $this->hasMany(Submenu::class, 'menuslug', 'slug');
    }
}