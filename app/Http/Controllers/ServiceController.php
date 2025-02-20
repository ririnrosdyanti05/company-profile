<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SukuCadang;

class ServiceController extends Controller
{
    public function create()
    {
        $suku_cadang = SukuCadang::all();
        return view('service', compact('suku_cadang'));
    }

    public function store(Request $request)
    {
        // Proses penyimpanan data service
        return back()->with('success', 'Data service berhasil disimpan!');
    }
}
