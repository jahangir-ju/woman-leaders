<?php

namespace App;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     public function categories(){
        return $this->hasOne('App\Category', 'id', 'categories');
    }

    public function getShortContentAttribute() {
      return Str::limit($this->content, 140);
    }
}
