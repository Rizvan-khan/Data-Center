<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageFaq extends Model
{
    protected $fillable = ['page_path', 'question', 'answer', 'position', 'is_active'];

    protected function casts(): array
    {
        return ['is_active' => 'boolean', 'position' => 'integer'];
    }
}
