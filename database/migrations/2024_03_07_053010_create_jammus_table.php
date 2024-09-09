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
        Schema::create('jammus', function (Blueprint $table) {
            $table->id();
            $table->string('lot_no')->nullable();
            $table->string('f_customer_no)')->nullable();
            $table->string('f_app_no')->nullable();
            $table->string('f_farmer_name')->nullable();
            $table->string('f_father_name')->nullable();
            $table->string('f_pin')->nullable();
            $table->string('p_pump_capacity')->nullable();
            $table->string('p_pump_type')->nullable();
            $table->string('p_pump_subtype')->nullable();
            $table->string('p_pump_head')->nullable();
            $table->string('c_contractor_name')->nullable();
            $table->string('c_firm')->nullable();
            $table->string('c_contact')->nullable();
            $table->string('c_email')->nullable();
            $table->string('s_survey_done')->nullable();
            $table->string('s_latitude')->nullable();
            $table->string('s_longitude')->nullable();
            $table->string('s_recieved')->nullable();
            $table->string('s_date')->nullable();
            $table->string('m_pump')->nullable();
            $table->string('m_structure')->nullable();
            $table->string('m_modules')->nullable();
            $table->string('m_bos')->nullable();
            $table->string('m_date')->nullable();
            $table->string('jcr_found')->nullable();
            $table->string('jcr_found_date')->nullable();
            $table->string('jcr_structure')->nullable();
            $table->string('jcr_structure_date')->nullable();
            $table->string('jcr_module')->nullable();
            $table->string('jcr_module_date')->nullable();
            $table->string('jcr_pump')->nullable();
            $table->string('jcr_pump_date')->nullable();
            $table->string('jcr_hoc')->nullable();
            $table->string('jcr_hoc_date')->nullable();
            $table->string('jcr_photo')->nullable();
            $table->string('jcr_photo_date')->nullable();
            $table->string('jcr_insurance')->nullable();
            $table->string('jcr_insurance_date')->nullable();
            $table->string('f_file_submit')->nullable();
            $table->string('f_file_submit_date')->nullable();
            $table->string('f_inspect')->nullable();
            $table->string('f_inspect_date')->nullable();
            $table->string('klk_pay_90')->nullable();
            $table->string('klk_pay_90_date')->nullable();
            $table->string('klk_pay_10')->nullable();
            $table->string('klk_pay_10_date')->nullable();
            $table->string('contractor_pay')->nullable();
            $table->string('contractor_pay_date')->nullable();
            $table->string('mt_pump_no')->nullable();
            $table->string('mt_motor_no')->nullable();
            $table->string('mt_controller_no')->nullable();
            $table->string('mt_rmsid')->nullable();
            $table->string('mt_imei')->nullable();
            $table->string('mt_module_watt')->nullable();
            $table->string('monitering')->nullable();
            $table->string('benifiecery')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jammus');
    }
};
