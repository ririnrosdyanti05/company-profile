<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SukuCadang extends Model
{
    use HasFactory;

    protected $table = 'suku_cadang'; // Pastikan nama tabel sesuai dengan database
    protected $fillable = ['nama', 'harga', 'stok']; // Sesuaikan dengan kolom yang ada
}
