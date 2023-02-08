<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class message_adjunt extends Model
{
    use HasFactory;

    //Relación uno a uno
    public function message() {

        return $this->BelongsTo('app\Models\Message');
    }
}
