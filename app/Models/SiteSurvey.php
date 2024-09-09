<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSurvey extends Model
{
    use HasFactory;
    protected $fillable = [
        'saral_id',
        'application_no',
        'empanelled_agency',
        'beneficiary',
        'gender',
        'category',
        'caste',
        'mobile',
        'aadhar_status',
        'location',
        'installation_village',
        'installation_dsitrict',
        'latitude',
        'longitude',
        'required_pump',
        'pump_sub_type',
        'pump_capacity',
        'spv_capacity',
        'pump_make',
        'module_make',
        'vfd_make',
        'rms_condtn',
        'sys_install_date',
        'sys_inspect_date',
        'sys_inspectby',
        'cfa',
        'sfa',
        'beneficiary_share',
        'total_pump_cost',
        'sanction',
        'app_current_status',
        'survey_by',
        'father_name',
        'land_coverage',
        'irrigationmode',
        'water_source',
        'water_depth',
        'imei',
        'pump_no',
        'pump_controller_no',
        'solar_panel_no',
        'southfacing',
        'site_suitable',
        'head_pump',
        'survey_latitude',
        'survey_longitude',
        'survey_done',
        'survey_date',
        'is_feasible_app',
        'feasible_date',
        'member_id',
        'family_id',
        'controller_type',
        'old_app',
        'boring_dym',
    ];
}
