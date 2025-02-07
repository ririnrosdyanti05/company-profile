<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    public function create()
    {
        return view('kunjungan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'jadwal' => 'required|date',
            'jam' => 'required|date_format:H:i',
        ]);

        Kunjungan::create($request->all());

        return redirect('/admin/kunjungan')->with('success', 'Data berhasil disimpan.');
    }

    public function index()
    {
        $kunjungan = Kunjungan::all();
        return view('admin.kunjungan', compact('kunjungan'));
    }
}

