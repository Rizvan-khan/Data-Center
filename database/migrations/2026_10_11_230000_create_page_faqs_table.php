<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('page_faq_imports', function (Blueprint $table) {
            $table->string('page_path')->primary();
        });
        Schema::create('page_faqs', function (Blueprint $table) {
            $table->id();
            $table->string('page_path');
            $table->string('question', 500);
            $table->text('answer');
            $table->unsignedInteger('position')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->index(['page_path', 'is_active', 'position']);
        });
    }

    public function down(): void { Schema::dropIfExists('page_faqs'); Schema::dropIfExists('page_faq_imports'); }
};
