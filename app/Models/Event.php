<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Participant;

class Event extends Model
{
    use HasFactory;


    protected $fillable = [

        'title',
        'descripcion',
        'localizacion',
        'verified',
        'organizador',
        'personas_inscritas',
        'img'
    ];

    function participants(){

        return $this->hasMany(Participant::class);
    }
}
