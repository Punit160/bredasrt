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
        Schema::create('vendorproductrequests', function (Blueprint $table) {
            $table->id();
            $table->string('required_date');
            $table->string('workorder');
            $table->string('state');
            $table->string('district');
            $table->string('block');
            $table->string('village');
            $table->string('remarks', 1000);
            $table->timestamps();
        });

        Schema::create('vendorproduct_productrequest', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendorproductrequest_id');
            $table->foreign('vendor  productrequest_id')->references('id')->on('vendorproductrequests');
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
        Schema::dropIfExists('vendorproductrequests');
        Schema::dropIfExists('vendorproduct_productrequest');
    }
};
