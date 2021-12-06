<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SVMH extends Model
{
    use HasFactory;

    protected $table = 'sv_mh';

    public $timestamps = false;

    protected $fillable = [
        'masv',
        'mamh',
        'trangthai',
    ];
}
