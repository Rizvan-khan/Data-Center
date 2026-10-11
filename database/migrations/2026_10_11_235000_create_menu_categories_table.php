<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->id();
            $table->string('menu_slug');
            $table->string('name', 100);
            $table->unsignedInteger('position')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->unique(['menu_slug', 'name']);
        });
        $rows = DB::table('submenus')->whereNotNull('category')->where('category','!=','')->select('menu-slug', 'category')->distinct()->get();
        foreach ($rows as $position=>$row) DB::table('menu_categories')->insert(['menu_slug'=>$row->{'menu-slug'}, 'name'=>$row->category,'position'=>$position,'is_active'=>true,'created_at'=>now(),'updated_at'=>now()]);
    }
    public function down(): void { Schema::dropIfExists('menu_categories'); }
};
