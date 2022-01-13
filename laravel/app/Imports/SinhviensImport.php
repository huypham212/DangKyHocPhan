<?php

namespace App\Imports;

use App\Models\Sinhvien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SinhviensImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Sinhvien([
            'masv'          => $row['masv'],
            'tensv'         => $row['tensv'],    
            'dob'           => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dob'])->format('Y-m-d'),
            'gioitinh'      => $row['gioitinh'],
            'diachi'        => $row['diachi'],
            'email'         => $row['email'],
            'matkhau'       => $row['matkhau'],
            'malop'         => $row['malop'],
            'manganh'       => $row['manganh'],
            'isfirstlogin'  => 0,
        ]);
    }
}
