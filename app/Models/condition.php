<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    public $timestamps = false; //timesatampを利用しない
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'room_no',
        'phone_no',
        'temperature',
        'oxygen',
        'note',


    ];
}
