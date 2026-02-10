<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filosofi extends Model
{
    protected $fillable = [
        'nama_kabinet',
        'logo',
        'deskripsi1',
        'deskripsi2'
    ];
}
