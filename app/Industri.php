<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $table = 'industris';
    protected $primaryKey = 'kode_industri';
    protected $fillable = ['kode_industri', 'nama','alamat','bidang','gambar','periode','deskripsi'];
}
