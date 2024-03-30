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
            $table->string('type')->default('product'); // product, accessory, replacement
            $table->string('condition')->default('new'); // new, reconditioned
            $table->longText('description')->default('Product Description');
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
