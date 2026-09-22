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
        Schema::create('settings', function (Blueprint $table) {
            $table->id(); // int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
            
            $table->text('mobile')->nullable();
            $table->text('mobile2')->nullable();
            $table->text('whatsapp')->nullable();
            $table->string('whatsapp_new', 255)->nullable();
            $table->string('telegram_new', 255)->nullable();
            $table->string('phone_new', 255)->nullable();
            $table->string('facebook_new', 255)->nullable();
            $table->text('email')->nullable();
            $table->text('emailfrom')->nullable();
            $table->text('address')->nullable();
            $table->string('city', 255)->nullable();
            $table->integer('pincode')->nullable();
            $table->text('state')->nullable();
            $table->string('country', 255)->nullable();
            $table->text('title')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('map')->nullable();
            $table->text('pre')->nullable();
            $table->text('url')->nullable();
            $table->text('bitly')->nullable();
            $table->text('package')->nullable();
            $table->text('shipping_price')->nullable();
            $table->string('logo', 255)->nullable();
            $table->text('website')->nullable();
            $table->string('favicon', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->text('pinterest')->nullable();
            $table->tinyInteger('status')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};