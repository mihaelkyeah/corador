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
        Schema::create('product_review_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('product_review_id');
                $table->foreign('product_review_id')->references('id')->on('product_reviews');
            $table->unsignedBigInteger('reply_to_id')->nullable();
                $table->foreign('reply_to_id')->references('id')->on('users');
            $table->longText('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_review_comments');
    }
};
