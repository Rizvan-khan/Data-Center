<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable = ['menu-slug', 'submenu', 'status', 'submenu-slug', 'image', 'description', 'position', 'category', 'icon'];

    public function menu()
    {

        return $this->belongsTo(Menu::class, 'menu-slug', 'slug');
    }

    public function getImageUrlAttribute(): ?string
    {
        if (!$this->image) {
            return null;
        }
        if (str_starts_with($this->image, 'menu-images/')) {
            return asset($this->image);
        }
        if (is_file(public_path('menu-images/'.basename($this->image)))) {
            return asset('menu-images/'.basename($this->image));
        }
        return null;
    }
}
