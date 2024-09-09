<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productrequest extends Model
{
    use HasFactory;
    protected $table = 'productrequests';
    protected $fillable = [
        'required_date',
        'state',
        'warehouse',
        'remarks',
    ];
    
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot(['id','quantity','unit']);
    }
}
