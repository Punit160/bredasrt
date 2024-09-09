<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ongrid extends Model
{
    use HasFactory;
    protected $fillable = [
       'state', 'work_order_no', 'work_order_date', 'beneficiary_name', 'contact_number', 'district', 'pin', 'invoice_no', 'invoice_date', 'material_supply', 'material_supply_date', 'installation', 'material_payment', 'plant_capacity', 'contractor_name', 'firm', 'contractor_number', 'meter_status', 'payment_85', 'payment_date', 'amc1', 'amc2', 'amc3', 'amc4', 'amc5', 'remarks', 'created_by', 'created_at', 'updated_at'
       
    ];
}
