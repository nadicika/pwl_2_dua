<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index()
    {
        $data = KeluargaModel::all();
        return view('keluarga')
                ->with('klg', $data);
    }
}
