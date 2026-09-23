<?php

namespace App\Models\Plan;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
   protected $fillable  = ['slug','page_title','description'];


   public function plans(){
    return $this->hasMany(Plan::class, 'page_id');
   }

    public function plan_headings(){
 return $this->hasMany(Plan_heading::class, 'page_id');
   }
}
