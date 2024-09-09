<?php

namespace App\Imports;

use App\Models\Ongrid;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class OngridImport implements ToModel, WithStartRow
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
        $ongrid = new Ongrid([

            'work_order_no'          => $row[0],
            'work_order_date'        => $row[1],
            'beneficiary_name'       => $row[2],
            'contact_number'         => $row[3],
            'district'               => $row[4],
            'pin'                    => $row[5],
            'invoice_no'             => $row[6],
            'invoice_date'           => $row[7],
            'material_supply'        => $row[8],
            'material_supply_date'   => $row[9],
            'material_payment'       => $row[10],
            'plant_capacity'         => $row[11],
            'contractor_name'        => $row[12],
            'firm'                   => $row[13],
            'contractor_number'      => $row[14],
            'meter_status'           => $row[15],
            'payment_85'             => $row[16],
            'payment_date'           => $row[17],
            'remarks'                => $row[18],
            'created_by'             => $this->created_by,
            'state'                  => $this->state,

        ]);
        if ($ongrid->save()) {
            $this->savedCount++;
        }
        return $ongrid;
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
