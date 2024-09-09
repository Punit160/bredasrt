<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatchproduct extends Model
{
    use HasFactory;
    protected $fillable = ['vendor','warehouse','state', 'datedispatch', 'truck', 'challan', 'phone', 'dispatch_status', 'site_name', 'location', 'dispatch_by', 'd_warehouse', 'remarks'];

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot(['id','quantity','unit']);;
    }
}
