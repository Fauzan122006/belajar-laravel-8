<?php

namespace App\Models;



class DaftarSiswa
{

    private static $daftarSiswa = [
        [
            "namasiswa" => "Fauzan",
            "email" => "fauzantakibang@gmail.com",
            "img" => "Fauzan.jpg",
            "github" => "https:github.com/Fauzan122006/",
            "insta" => "https://instagram.com/moh_fauzan1212/",
            "fb" => "https://facebook.com/",
            "tweet" => "https://x.com"
        ],

        [
            "namasiswa" => "Gafur",
            "email" => "fauzantakibang@gmail.com",
            "img" => "rpl3.png",
            "github" => "https:github.com/Fauzan122006/",
            "insta" => "https://instagram.com/moh_fauzan1212/",
            "fb" => "https://facebook.com/",
            "tweet" => "https://x.com"
        ]
    ];

    public static function all() {
        return collect(self::$daftarSiswa);
    }
}
