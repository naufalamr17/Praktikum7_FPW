<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{

    public function index()
    {
        $kelas = Kelas::latest()->get();

        return view('kelas', compact('kelas'));
    }

    public function store(Request $request)
    {
        $post = new Mahasiswa();
        $post->id = $request->idmhs;
        $post->nama = $request->fname;
        $post->kelas_id = $request->idkel;
        $post->save();

        $kelas = Kelas::latest()->get();
        return view('kelas', compact('kelas'));
    }
}
