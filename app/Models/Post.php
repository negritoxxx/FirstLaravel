<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación Uno a Muchos inversa
    public function user() {

        return $this->belongsTo(User::class, 'user_id');
    }

    //Relación Uno a Uno polimorfica
    public function image() {

        return $this->morphOne(Image::class, 'imageable');
    }
}
