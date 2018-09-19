<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Simple extends Authenticatable
{
    // masukan nama table
    use Notifiable;
    protected $table = 'users';
}
