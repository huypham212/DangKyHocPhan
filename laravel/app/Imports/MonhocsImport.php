<?php

namespace App\Imports;

use App\Models\Monhoc;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MonhocsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Monhoc([
            'mamh'      => $row['mamh'],
            'tenmh'     => $row['tenmh'],
            'sotc'      => $row['sotc'],
            'hocphi'    => $row['hocphi'],
            'manganh'   => $row['manganh'],
        ]);
    }
}
