<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classroom;

class Room extends Model
{
    public function classroom(){
        return $this->hasOne(Classroom::class);
    }
}
