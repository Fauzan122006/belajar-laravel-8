<?php

namespace App\Http\Controllers;

use App\Models\DaftarSiswa;
use Illuminate\Http\Request;

class DaftarSiswaController extends Controller
{
    public function index() {
        
        return view('daftarsiswa', [
            "title" => "Daftar siswa",
            "daftarSiswa" => DaftarSiswa::all()
        ]);
    }
}
