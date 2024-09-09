<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerPack extends Model
{
    use HasFactory;
    protected $fillable = [
     'state', 'serial_num', 'empanelled_agency', 'beneficiary_name', 'beneficiary_contact', 'beneficiary_gender', 'latitude', 'longitude', 'district', 'beneficiary_address', 'contractor_name', 'material_dispatch', 'material_dispatch_date', 'installation_status', 'installation_date', 'inspection_status', 'inspection_status_date', 'payment_85', 'payment_date', 'amc1', 'amc2', 'amc3', 'amc4', 'amc5', 'remarks', 'amc_1_doc', 'amc_2_doc', 'amc_3_doc', 'amc_4_doc', 'amc_5_doc', 'created_by'
        
    ];
}
