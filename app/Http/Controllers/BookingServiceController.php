<?php
namespace App\Http\Controllers;

use App\Models\BookingService;
use Illuminate\Http\Request;

class BookingServiceController extends Controller
{
    public function create()
    {
        $bookingService = BookingService:all();
        return view('admin.booking.index', compact('bookingService'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'pemilik' => 'required|string',
            'jenis_motor' => 'required|string',
            'stnk' => 'required|string|unique:bookings,stnk',
            'tahun_keluaran' => 'required|integer|min:2000|max:' . date('Y'),
            'terakhir_service' => 'required|date',
            'jenis_kb' => 'required|in:KB 1,KB 2,KB 3,KB 4,Non KB',
            'suku_cadang' => 'required|exists:suku_cadang,id',
            'keluhan' => 'nullable|string',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'alamat' => 'required|string',
            'jadwal' => 'required|date',
            'jam' => 'required|date_format:H:i',
        ]);

        BookingService::create($request->all());
        return redirect()->route('booking_service.create')->with('success', 'Data berhasil disimpan');
    }
}

