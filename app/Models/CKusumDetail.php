<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CKusumDetail extends Model
{
    use HasFactory;
    public function CkusumModulee()
    {
        return $this->hasMany(CKusumModule::class);
    }
}
