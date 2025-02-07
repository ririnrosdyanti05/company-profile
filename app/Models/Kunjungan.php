<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungan';
    protected $fillable = ['provinsi', 'kota', 'alamat', 'jadwal', 'jam'];
}
