<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('page_url')->nullable();
            $table->string('plan_type')->nullable();
            $table->string('plan_title');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price_mothly', 8, 2)->default(0.00); // misspelling 'mothly' fillable se match ki gayi hai
            $table->decimal('renew_price', 8, 2)->default(0.00);
            $table->decimal('discount_mothly', 8, 2)->nullable();
            $table->decimal('price_yearly', 8, 2)->default(0.00);
            $table->decimal('renew_yearly', 8, 2)->default(0.00);
            $table->decimal('discount_yearly', 8, 2)->nullable();
            $table->boolean('status')->default(true); // 1 = Active, 0 = Inactive
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
