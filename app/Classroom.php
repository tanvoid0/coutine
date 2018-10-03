<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class Classroom extends Model
{
    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function weekday(){
        return $this->belongsTo(Weekday::class);
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function subject() {
        return $this->hasOne(Subject::class);
    }

    public function teacher() {
        return $this->hasOne(Teacher::class);
    }
}
