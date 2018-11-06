<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class channel_message extends Model
{
    protected $table = 'channel_messages';
    protected $fillable = ['channels','messages','room','from','receive','created_at','updated_at'];
}
