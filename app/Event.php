<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'date'  => 'date:Y-m-d',
    ];
     public function getCustomDateAttribute() {
      return $this->date->format('d M');
    }
     public function getDateFormatAttribute() {
      return $this->date->format('d M Y');
    }
    public function getTimeFormatAttribute() {
      return date('h:i A', strtotime($this->time));
    }
}
