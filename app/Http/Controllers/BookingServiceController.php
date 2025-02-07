<?php
namespace App\Http\Controllers;

use App\Models\BookingService;
use Illuminate\Http\Request;

class BookingServiceController extends Controller
{
    public function create()
    {
        return view('booking_service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_polisi' => 'required',
            'nomor_rangka' => 'required',
            'model_unit' => 'required',
            'model_transmisi' => 'required',
            'tahun_kendaraan' => 'required|integer',
            'stnk_berlaku' => 'required|date',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'kode_booking' => 'required|unique:booking_services',
            'paket_service' => 'required',
            'tanggal_booking' => 'required|date',
        ]);

        BookingService::create($request->all());
        return redirect()->route('booking_service.create')->with('success', 'Data berhasil disimpan');
    }
}

