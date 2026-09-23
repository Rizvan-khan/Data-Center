<?php

namespace App\Models\Plan;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['page_id','page_url','plan_type','plan_title','short_description','description','renew_price','price_monthly','price_yearly','renew_yearly','discount_mothly','discount_yearly','status'];

  public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

    }
