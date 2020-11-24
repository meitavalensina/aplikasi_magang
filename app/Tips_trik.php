<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tips_trik extends Model
{
    protected $table = 'tips_triks';
    protected $primaryKey = 'id_tips';
    protected $fillable = ['judul', 'deskripsi'];
}
