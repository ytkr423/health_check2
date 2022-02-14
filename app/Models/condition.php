<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condition extends Model
{
    use HasFactory;

    //public $timestamps = false; //timesatampを利用しない
    use SoftDeletes;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    protected $fillable = [
        'room_no',
        'phone_no',
        'temperature_morning',
        'temperature_afternoon',
        'oxygen',
        'note',
        'user_id',
        'id',


    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
