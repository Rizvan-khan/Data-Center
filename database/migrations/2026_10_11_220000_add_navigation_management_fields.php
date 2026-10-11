<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('menus', fn (Blueprint $table) => $table->string('url')->nullable());
        Schema::table('submenus', function (Blueprint $table) {
            $table->unsignedInteger('position')->default(0);
            $table->string('category')->nullable();
            $table->string('icon')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('menus', fn (Blueprint $table) => $table->dropColumn('url'));
        Schema::table('submenus', fn (Blueprint $table) => $table->dropColumn(['position', 'category', 'icon']));
    }
};
