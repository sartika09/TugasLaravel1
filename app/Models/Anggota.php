<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'anggota';
    protected $fillable = [
        'id',
        'kode_anggota',
        'nama_anggota',
        'jk_anggota',
        'jurusan_anggota',
        'no_telp_anggota',
        'alamat_anggota',
    ];
}