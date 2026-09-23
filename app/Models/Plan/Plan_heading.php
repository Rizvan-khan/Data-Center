<?php

namespace App\Models\Plan;

use Illuminate\Database\Eloquent\Model;

class Plan_heading extends Model
{
    protected $fillable = ['page_url','heading','paragraph','status','page_id'];
      public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
