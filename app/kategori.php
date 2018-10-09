<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table ='kategoris';
    protected $fillable = ['kode_kategori', 'nama_kategori'];
}
