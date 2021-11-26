<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;

    protected $table = 'sinhvien';
    public $timestamps = false;

    protected $fillable = [
        'masv',
        'tensv',
        'dob',
        'gioitinh',
        'diachi',
        'email',
        'matkhau',
        'malop',
        'manganh',
        'isfirstlogin'
    ];
}
