<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    //Relación Uno a Muchos inversa
    public function user() {

        return $this->belongsTo(User::class);
    }

    //Relación uno a uno
    public function message_adjunt() {

        return $this->hasOne('app\Models\message_adjunt');
    }
}
