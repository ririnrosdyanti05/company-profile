<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'address', 'phone'];

    protected $visible = ['name', 'description', 'address', 'phone'];
    public $timestamps = true;
}
