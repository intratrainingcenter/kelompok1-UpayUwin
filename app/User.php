<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Authenticatable\User as Authenticatable;

class User extends Authenticatable
{
    //
    use Notifiable ; 

}
