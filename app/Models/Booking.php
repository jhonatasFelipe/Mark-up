<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room',
        'user',
        'time'
    ];
    public $table = 'reserva';

    public $timestamps = false;

}
