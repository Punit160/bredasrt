<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ssl extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'state',
        'project_name',
        'loi_no',
        'district',
        'bill_sign_date',
        'work_order_no',
        'invoice_no',
        'invoice_date',
        'invoice_qty',
        'total_installed',
        'jcr_submitted',
        'under_sdm_verification',
        'sdm_submission_date',
        'not_submitted_to_sdm',
        'under_approved',
        'approved_date',
        'payment_status',
        'pay_85',
        'scheme_name',
        'first_year_amc_payment',
        'second_year_amc_payment',
        'created_by',
       
    ];

}
