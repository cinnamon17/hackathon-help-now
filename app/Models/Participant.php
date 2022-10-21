<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Message;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'event_id'
    ];


    function messages(){


        return $this->hasMany(Message::class);
    }
}
