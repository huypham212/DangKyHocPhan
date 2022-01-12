<?php

namespace App\Imports;

use App\Models\Lop;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LopsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lop([
            'malop'     => $row['malop'],
            'tenlop'    => $row['tenlop'],
            'nienkhoa'  => $row['nienkhoa'],
            'makhoa'    => $row['makhoa'],
        ]);
    }
}
