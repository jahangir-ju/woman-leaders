<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event; 

class EventRegister extends Model
{
      public function event() {
        return $this->hasMany(Event::class);
    }
}
