<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voucher_game extends Model
{
    public function showCategori()
    {
        return $this->belongsTo('App\kategori', 'kode_kategori', 'kode_kategori');
    }
}
