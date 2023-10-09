<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillabel = [
        'kode_anggota',
        'nama_anggota',
        'jenis_kelamin',
        'jurusan_anggota',
        'no_telp',
        'alamat',
    ];
}
