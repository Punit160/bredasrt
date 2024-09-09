<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiharSsl extends Model
{
    use HasFactory;

    protected $fillable = [
        'state', 'district', 'block', 'panchyat', 'ward_no', 'pole_no', 'beneficiary_name', 'contact_no', 'latitude', 'longitude', 'along_with_pole', 'luminary_no', 'sim_no', 'battery_serial_no', 'module_no', 'date_of_installation', 'installed_by', 'inspected_by_breda', 'inspection_date', 'supply', 'install_inspect', 'payment_25', 'payment_45', 'payment_30', 'status', 'image', 'created_by'
    ];
}
