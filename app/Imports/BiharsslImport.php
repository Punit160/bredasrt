<?php

namespace App\Imports;

use App\Models\BiharSsl;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class BiharsslImport implements ToModel,WithStartRow
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
        $ssl = new BiharSsl([
            'district' => $row[0],
            'block' => $row[1],
            'panchyat' => $row[2],
            'ward_no' => $row[3],
            'pole_no' => $row[4],
            'beneficiary_name' => $row[5],
            'contact_no' => $row[6],
            'latitude' => $row[7],
            'longitude' => $row[8],
            'along_with_pole' => $row[9],
            'luminary_no' => $row[10],
            'sim_no' => $row[11],
            'battery_serial_no' => $row[12],
            'module_no' => $row[13],
            'date_of_installation' => $row[14],
            'installed_by' => $row[15],
            'inspected_by_breda' => $row[16],
            'inspection_date' => $row[17],
            'status' => $row[18],
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
