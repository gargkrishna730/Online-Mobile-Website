<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('price')->nullable();
            $table->string('stock')->nullable();
            $table->string('docs')->nullable();
            $table->string('discount')->nullable();
            $table->text('description')->nullable();
            $table->text('details')->nullable();
            $table->text('gallery')->nullable();
            $table->json('related')->nullable();
            $table->json('tags')->nullable();
            $table->json('media')->nullable();
            $table->string('ratings')->default('5')->nullable();
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
