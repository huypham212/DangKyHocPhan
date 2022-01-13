<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    use HasFactory;

    protected $table = 'monhoc';

    public $timestamps = false;

    protected $fillable = [
        'mamh',
        'tenmh',
        'sotc',
        'hocphi',
        'manganh'
    ];
}
