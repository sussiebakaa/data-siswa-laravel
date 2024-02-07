<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students 
{
    private static $students = [
        [
            "id" => 1,
            "nis" => 8890017,
            "nama" => "Aan Kurniawan",
            "kelas" => "11 PPLG 1",
            "alamat" => "Sumbawa",
            "tanggal_lahir" => "05-11-2007"
        ],
        [
            "id" => 2,
            "nis" => 8890091,
            "nama" => "Aaron Ikhwan Syaputra",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jekulo",
            "tanggal_lahir" => "10-10-2006"
        ],
        [
            "id" => 3,
            "nis" => 8890799,
            "nama" => "Acaryanandana Alif Fajar",
            "kelas" => "11 PPLG 1",
            "alamat" => "Bekasi",
            "tanggal_lahir" => "22-07-2007"
        ],
        [
            "id" => 4,
            "nis" => 8890792,
            "nama" => "Altan Assyfa Naura Putra",
            "kelas" => "11 PPLG 1",
            "alamat" => "Gondang Manis",
            "tanggal_lahir" => "30-02-2007"
        ],

    ];

    public static function all()
    {
        return self::$students;
    }
}