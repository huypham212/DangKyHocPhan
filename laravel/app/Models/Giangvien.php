<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giangvien extends Model
{
    use HasFactory;

    protected $table = 'giangvien';

    public $timestamps = false;

    protected $fillable = [
        'magv',
        'tengv',
        'gioitinh',
        'email',
        'makhoa',
    ];
}
