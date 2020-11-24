<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minimarket extends Model
{
    protected $table = 'minimarkets';
    protected $primaryKey = 'kode_market';
    protected $fillable = ['kode_market', 'nama', 'lokasi'];
}
