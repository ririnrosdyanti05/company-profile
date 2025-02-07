<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public $fillable = ['id', 'gambar', 'description'];

    public $visible = ['id', 'gambar', 'description'];
    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('assets3/images/' . $this->image))) {
            return unlink(public_path('assets3/images/' . $this->image));
        }
    }
}
