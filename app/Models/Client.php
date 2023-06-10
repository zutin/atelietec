<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable;

    protected $table = "clients";

    protected $fillable = [
        'name',
        'phone',
        'email',
        'description'
    ];
}
