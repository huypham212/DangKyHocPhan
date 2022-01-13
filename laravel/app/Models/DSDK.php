<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DSDK extends Model
{
    use HasFactory;

    protected $table = 'ds_dangky';
    public $timestamps = false;

    protected $fillable = [
        'masv',
        'malophp',
        'hocky',
        'namhoc'
    ];
}
