<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $table = 'laundries';
    protected $primaryKey = 'kode_laundry';
    protected $fillable = ['nama','lokasi','daftar_harga'];
}
