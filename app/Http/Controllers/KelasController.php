<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    
    public function index()
    {
        $kelas = Kelas::latest()->get();

        return view('kelas', compact('kelas'));
    }
}
