<?php

namespace App\Imports;

use App\Models\PowerPack;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class PowerPackImport implements ToModel, WithStartRow
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
        $power = new PowerPack([

            'serial_num'             => $row[0],
            'empanelled_agency'      => $row[1],
            'beneficiary_name'       => $row[2],
            'beneficiary_contact'    => $row[3],
            'beneficiary_gender'     => $row[4],
            'latitude'               => $row[5],
            'longitude'              => $row[6],
            'district'               => $row[7],
            'beneficiary_address'    => $row[8],
            'contractor_name'        => $row[9],
            'material_dispatch'      => $row[10],
            'material_dispatch_date' => $row[11],
            'installation_status'    => $row[12],
            'installation_date'      => $row[13],
            'inspection_status'      => $row[14],
            'inspection_status_date' => $row[15],
            'material_payment_80'    => $row[16],
            'material_payment_80_date' => $row[17],
            'material_payment_41'    => $row[18],
            'material_payment_41_date' => $row[19],
            'material_payment_42'    => $row[20],
            'material_payment_42_date' => $row[21],
            'material_payment_43'    => $row[22],
            'material_payment_43_date' => $row[23],
            'material_payment_44'    => $row[24],
            'material_payment_44_date' => $row[25],
            'material_payment_45'    => $row[26],
            'material_payment_45_date' => $row[27],
            'remarks'                  => $row[28],
            'created_by'             => $this->created_by,
            'state'                  => $this->state,

        ]);
        if ($power->save()) {
            $this->savedCount++;
        }
        return $power;
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
