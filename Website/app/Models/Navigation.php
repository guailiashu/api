<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Navigation extends Model
{
    //
    use Notifiable;

    public $table = 'navigations';
}
