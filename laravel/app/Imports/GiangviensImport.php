<?php

namespace App\Imports;

use App\Models\Giangvien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GiangviensImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Giangvien([
            'magv'      => $row['magv'],
            'tengv'     => $row['tengv'],
            'gioitinh'  => $row['gioitinh'],
            'email'     => $row['email'],
            'makhoa'    => $row['makhoa'],
        ]);
    }
}
