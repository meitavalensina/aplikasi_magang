<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    protected $table = 'kosts';
    protected $primaryKey = 'id_kost';
    protected $fillable = ['nama', 'alamat', 'harga', 'kontak','fasilitas', 'gambar'];
}
