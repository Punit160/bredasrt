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
        Schema::create('productrequests', function (Blueprint $table) {
            $table->id();
            $table->string('required_date');
            $table->string('warehouse');
            $table->string('remarks', 1000);
            $table->timestamps();
        });

        Schema::create('product_productrequest', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productrequest_id');
            $table->foreign('productrequest_id')->references('id')->on('productrequests');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('quantity');
            $table->integer('unit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productrequests');
        Schema::dropIfExists('product_productrequest');
    }
};
