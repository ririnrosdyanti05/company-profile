<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;
use App\Models\SukuCadang;

class KunjunganController extends Controller
{
    public function create()
    {
        $suku_cadang = SukuCadang::all(); // Ambil data suku cadang dari database
        return view('kunjungan.create', compact('suku_cadang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'jadwal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'jenis_servis' => 'required',
            'suku_cadang' => 'nullable|array',
            'suku_cadang.*' => 'exists:suku_cadang,id', // Pastikan suku cadang valid
            'keluhan' => 'nullable|string',
            'tipe_kendaraan' => 'required|string',
            'nomor_polisi' => 'required|string|max:10'
        ]);

        $kunjungan = Kunjungan::create($request->except('suku_cadang'));

        // Simpan suku cadang jika ada yang dipilih
        if ($request->has('suku_cadang')) {
            $kunjungan->sukuCadang()->attach($request->suku_cadang);
        }

        return redirect('/admin/kunjungan')->with('success', 'Data berhasil disimpan.');
    }

    public function index()
    {
        $kunjungan = Kunjungan::with('sukuCadang')->get(); // Ambil data dengan relasi
        return view('admin.kunjungan', compact('kunjungan'));
    }
}
