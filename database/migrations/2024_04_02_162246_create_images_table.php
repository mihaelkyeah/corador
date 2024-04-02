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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('img_path');
            $table->timestamps();
        });
        Schema::create('image_comment', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Image::class);
            $table->foreignIdFor(\App\Models\Comment::class);
        });
        Schema::create('image_product', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Image::class);
            $table->foreignIdFor(\App\Models\Product::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
        Schema::dropIfExists('image_comment');
        Schema::dropIfExists('image_product');
    }
};
