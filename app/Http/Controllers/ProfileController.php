<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile')
        ->with('name', 'Inthania Nadicika Kurniawan')
        ->with('nama', 'Cika')
        ->with('nim', '2141720012')
        ->with('kelas', 'TI-2B')
        ->with('absen', '10')
        ->with('prodi', 'D-IV Teknik Informatika')
        ->with('jurusan', 'Teknologi Informasi')
        ->with('univ', 'Politeknik Negeri Malang');
    }
}
