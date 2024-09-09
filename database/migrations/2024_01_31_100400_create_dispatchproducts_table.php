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
        Schema::create('dispatchproducts', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse')->nullable();
            $table->string('datedispatch')->nullable();
            $table->string('truck')->nullable();
            $table->string('challan')->nullable();
            $table->string('phone')->nullable();
            $table->string('dispatch_status')->nullable();
            $table->string('site_name')->nullable();
            $table->string('location')->nullable();
            $table->string('dispatch_by')->nullable();
            $table->string('d_warehouse')->nullable();
            $table->timestamps();
        });

        Schema::create('dispatchproduct_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dispatchproduct_id');
            $table->foreign('dispatchproduct_id')->references('id')->on('dispatchproducts');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('quantity');
            $table->integer('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispatchproducts');
        Schema::dropIfExists('dispatchproduct_product');
    }
};
