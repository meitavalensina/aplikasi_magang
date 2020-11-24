<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisatas';
    protected $primaryKey = 'kode_wisata';
    protected $fillable = ['nama', 'lokasi', 'gambar', 'tiket_masuk'];
}
