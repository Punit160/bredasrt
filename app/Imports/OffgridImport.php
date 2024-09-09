<?php

namespace App\Imports;

use App\Models\Offgrid;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class OffgridImport implements ToModel, WithStartRow
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
        $offgrid = new Offgrid([

            'work_order_no'          => $row[0],
            'work_order_date'        => $row[1],
            'invoice_no'             => $row[2],
            'invoice_date'           => $row[3],
            'beneficiary_name'       => $row[4],
            'mobile_no'              => $row[5],
            'district'               => $row[6],
            'plant_capacity'         => $row[7],
            'material_supply'        => $row[8],
            'material_supply_date'   => $row[9],
            'material_payment'       => $row[10],
            'contractor_name'        => $row[11],
            'installation'           => $row[12],
            'date_of_installation'   => $row[13],
            'plant_connection'       => $row[14],
            'satyapan'               => $row[15],
            'pdi'                    => $row[16],
            'payment'                => $row[17],
            'amount'                 => $row[18],
            'remarks'                => $row[19],
            'created_by'             => $this->created_by,
            'state'                  => $this->state,

        ]);
        if ($offgrid->save()) {
            $this->savedCount++;
        }
        return $offgrid;
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
