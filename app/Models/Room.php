<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'obs'
    ];
    protected $table = 'room';
    public $timestamps = false;
}
