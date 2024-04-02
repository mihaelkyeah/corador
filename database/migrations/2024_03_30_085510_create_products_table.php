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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Brand::class);
            $table->string('name')->default('Product Name');
            $table->string('type')->default('product'); // product, accessory, replacement
            $table->string('acoustic_electric')->default('acoustic')->nullable(); // product, accessory, replacement
            $table->string('condition')->default('new'); // new, reconditioned
            $table->longText('description')->nullable();
            $table->json('specs')->nullable();
            $table->decimal('price', total: 10, places: 2)->default(0);
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
        // PIVOT TABLES
        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class);
            $table->foreignIdFor(\App\Models\Category::class);
        });
        Schema::create('product_cart', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\Product::class);
        });
        Schema::create('user_favorite', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\Product::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_category');
        Schema::dropIfExists('product_cart');
        Schema::dropIfExists('user_favorite');
    }
};
