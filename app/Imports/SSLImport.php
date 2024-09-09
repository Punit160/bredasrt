<?php

namespace App\Imports;

use App\Models\Ssl;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class SSLImport implements ToModel,WithStartRow
{
    private $state;
    private $created_by;
    private $savedCount;

    public function __construct($state, $created_by)
    {
        $this->state = $state;
        $this->created_by = $created_by;
        $this->savedCount = 0;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $ssl = new Ssl([

            'project_name' => $row[0],
            'loi_no' => $row[1],
            'district' => $row[2],
            'bill_sign_date' => $row[3],
            'work_order_no' => $row[4],
            'invoice_no' => $row[5],
            'invoice_date' => $row[6],
            'invoice_qty' => $row[7],
            'total_installed' => $row[8],
            'jcr_submitted' => $row[9],
            'under_sdm_verification' => $row[10],
            'sdm_submission_date' => $row[11],
            'not_submitted_to_sdm' => $row[12],
            'under_approved' => $row[13],
            'approved_date' => $row[14],
            'payment_status' => $row[15],
            'pay_85' => $row[16],
            'scheme_name' => $row[17],
            'first_year_amc_payment' => $row[18],
            'second_year_amc_payment' => $row[19],
            'created_by' => $this->created_by,
            'state' => $this->state,

        ]);
        if ($ssl->save()) {
            $this->savedCount++;
        }
        return $ssl;
    }


    public function startRow(): int
    {
        return 2;
    }

    public function getSavedCount()
    {
        return $this->savedCount;
    }
}
