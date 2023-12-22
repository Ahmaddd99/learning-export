<?php

namespace App\Imports;

use App\Models\Karyawan;
use Maatwebsite\Excel\Concerns\ToModel;

class KaryawanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Karyawan([
            'name' => $row[1],
            'place_of_birth' => $row[2],
            // 'date_of_birth' => $row[3],
            'gender' => $row[4], 
            'address' => $row[5],
            'division' => $row[6],
            'position' => $row[7]
        ]);
    }
}
