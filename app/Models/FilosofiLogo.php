<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilosofiLogo extends Model
{
    protected $fillable = [
        'gambar_logo',
        'nama_logo',
        'deskripsi_logo'
    ];
}
