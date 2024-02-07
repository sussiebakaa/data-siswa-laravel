<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Extracurricular

{
    private static $eskul = [
        [
            "id" => 1,
            "nama" => "OSIS",
            "nama_pembina" => "Bu Widy",
            "deskripsi" => "Organisasi Siswa Intra Sekolah",
        ],
        [
            "id" => 2,
            "nama" => "MPK",
            "nama_pembina" => "Bu Widy",
            "deskripsi" => "Majelis Perwakilan Kelas",
        ],
        [
            "id" => 3,
            "nama" => "Musik",
            "nama_pembina" => "Kak Lieya",
            "deskripsi" => "Eskul yang mengisi acara sekolah dengan penampilan musik",
        ],
        [
            "id" => 4,
            "nama" => "Rohis",
            "nama_pembina" => "Pak Edy",
            "deskripsi" => "Rohani Islam adalah sebuah organisasi memperdalam dan memperkuat ajaran Islam",
        ],
        [
            "id" => 5,
            "nama" => "Teater",
            "nama_pembina" => "Bu Fara",
            "deskripsi" => "Ekskul teater adalah salah satu salah satu seni bermain peran yang menyajikan cerita kehidupan nyata di atas pentas",
        ],
        
    ];

    public static function allextra()
    {
        return self::$eskul;
    }
}