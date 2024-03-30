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
            $table->unsignedBigInteger('brand_id')->default(1); // brand 1 is expected to be Corador
                $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('name')->default('Product Name');
            $table->unsignedBigInteger('category_id')->default(1); // brand 1 is expected to be Keyboards
                $table->foreign('category_id')->references('id')->on('categories');
            $table->string('type')->default('product'); // product, accessory, replacement
            $table->string('acoustic_electric')->default('acoustic')->nullable(); // product, accessory, replacement
            $table->boolean('is_midi')->default(false); // particularly in the case of electric keyboards and drums, these are the only types of instruments that can be instruments AND midi products. There are some midi capable guitars but they are a rarity.
            $table->string('condition')->default('new'); // new, reconditioned
            $table->longText('description')->nullable();
            $table->json('specs')->nullable();
            $table->decimal('price', total: 10, places: 2)->default(0);
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
