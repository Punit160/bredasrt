<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendorproductrequest extends Model
{
    use HasFactory;
    protected $table = 'vendorproductrequests';
    protected $fillable = [
         'vendor_id','required_date', 'workorder', 'state', 'district', 'block', 'village', 'site', 'address', 'remarks'
    ];
    
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot(['id','quantity','unit']);
    }
}
