<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingService extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_booking', 'nama', 'jenis_kelamin', 'pemilik', 'jenis_motor', 'nomor_stnk',
        'tahun_keluaran', 'terakhir_service', 'jenis_kb', 'suku_cadang_id', 'keluhan',
        'provinsi', 'kota', 'alamat', 'tanggal_booking', 'jam_booking'
    ];

    public function sukuCadang()
    {
        return $this->belongsTo(SukuCadang::class, 'suku_cadang_id');
    }
}
