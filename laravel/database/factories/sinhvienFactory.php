<?php

namespace Database\Factories;

use App\Models\sinhvien;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class sinhvienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\sinhvien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'masv' => 'SV003',
            'hoten' => 'Nguyễn Văn A',
            'ngaysinh' => '2000-05-13',
            'diachi' => 'Sơn Trà, Đà Nẵng',
            'matkhau' => 'a12345',
            'malop' => 'DHCN5'
        ];
    }
}
