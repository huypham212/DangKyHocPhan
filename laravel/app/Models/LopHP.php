<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LopHP extends Model
{
    use HasFactory;

    protected $table = 'lop_hp';

    public $timestamps = false;

    protected $fillable = [
        'malophp',
        'tenlophp',
        'siso',
        'thoigian',
        'diadiem',
        'magv',
        'mamh'
    ];
}
