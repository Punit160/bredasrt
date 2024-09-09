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
        Schema::create('swps', function (Blueprint $table) {
            $table->id();
            $table->string('customer_no')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('district')->nullable();
            $table->string('village')->nullable();
            $table->string('tehsil')->nullable();
            $table->string('post')->nullable();
            $table->string('pin')->nullable();
            $table->string('pump_type')->nullable();
            $table->string('pump_capacity')->nullable();
            $table->string('pump_subtype')->nullable();
            $table->string('complaint')->nullable();
            $table->string('start_date')->nullable();
            $table->string('close_date')->nullable();
            $table->string('resolved_by')->nullable();
            $table->string('r_mobile')->nullable();
            $table->string('r_email')->nullable();
            $table->string('file')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swps');
    }
};
