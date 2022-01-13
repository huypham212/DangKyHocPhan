<?php

namespace App\Imports;

use App\Models\LopHP;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LopHPsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new LopHP([
            'malophp'   => $row['malophp'],
            'tenlophp'  => $row['tenlophp'],
            'siso'      => $row['siso'],
            'thoigian'  => $row['thoigian'],
            'diadiem'   => $row['diadiem'],
            'magv'      => $row['magv'],
            'mamh'      => $row['mamh'],
        ]);
    }
}
