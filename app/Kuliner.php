<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    protected $table = 'kuliners';
    protected $primaryKey = 'kode_kuliner';
    protected $fillable = ['kode_kuliner', 'nama', 'lokasi', 'gambar', 'deskripsi', 'harga', 'jadwal_buka'];
}
