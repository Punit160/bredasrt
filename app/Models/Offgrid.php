<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offgrid extends Model
{
    use HasFactory;

    protected $fillable=['state', 'work_order_no', 'work_order_date', 'invoice_no', 'invoice_date', 'beneficiary_name', 'mobile_no', 'district', 'plant_capacity', 'material_supply', 'material_supply_date', 'material_payment', 'contractor_name', 'installation', 'date_of_installation', 'plant_connection', 'satyapan', 'pdi', 'payment', 'amc1', 'amc2', 'amc3', 'amc4', 'amc5', 'amount', 'remarks', 'created_by', 'created_at', 'updated_at'];
}
