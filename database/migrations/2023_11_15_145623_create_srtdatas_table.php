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
        Schema::create('srtdatas', function (Blueprint $table) {
            $table->id();
            $table->string('discom');
            $table->string('district');
            $table->string('dept_name')->nullable();
            $table->string('site_name')->nullable();
            $table->string('location', 500)->nullable();
            $table->string('firm_name')->nullable();
            $table->string('ca_no')->nullable();
            $table->string('sanction_load')->nullable();
            $table->string('plant_sc')->nullable();
            $table->string('wo_no')->nullable();
            $table->string('phase')->nullable();
            $table->string('vendor')->nullable();
            $table->string('date')->nullable();
            $table->string('material_i_date')->nullable();
            $table->string('mb_invoice')->nullable();
            $table->string('material_payment')->nullable();
            $table->string('installation_status')->nullable();
            $table->string('inst_remarks', 500)->nullable();
            $table->string('ic_bill_submit')->nullable();
            $table->string('bill_i_no')->nullable();
            $table->string('ic_payment')->nullable();
            $table->string('ic_date')->nullable();
            $table->string('net_meter_submit_date')->nullable();
            $table->string('metering_status')->nullable();
            $table->string('smart_meter')->nullable();
            $table->string('convert_nm')->nullable();
            $table->string('nm_required')->nullable();
            $table->string('nm_install')->nullable();
            $table->string('test_slip')->nullable();
            $table->string('ts_image')->nullable();
            $table->string('fix_slip')->nullable();
            $table->string('fs_image')->nullable();
            $table->string('meter_i_date')->nullable();
            $table->string('rms_url')->nullable();
            $table->string('rms_status')->nullable();
            $table->string('geo_image_status')->nullable();
            $table->string('geo_image1')->nullable();
            $table->string('geo_image2')->nullable();
            $table->string('geo_image3')->nullable();
            $table->string('geo_image4')->nullable();
            $table->string('abc_format')->nullable();
            $table->string('abc_photo')->nullable();
            $table->string('comm_report')->nullable();
            $table->string('cr_doc')->nullable();
            $table->string('iv_curv')->nullable();
            $table->string('iv_curv_doc')->nullable();
            $table->string('inspect_image')->nullable();
            $table->string('insurance')->nullable();
            $table->string('insurance_copy')->nullable();
            $table->string('wms')->nullable();
            $table->string('wms_login')->nullable();
            $table->string('final_i_dt')->nullable();
            $table->string('agency_remarks', 500)->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('srtdatas');
    }
};
