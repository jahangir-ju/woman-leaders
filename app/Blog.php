<?php

namespace App;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;
use App\Category; 

class Blog extends Model
{
     public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getShortContentAttribute() {
      return Str::limit($this->content, 140);
    }
      public function getCustomDateAttribute() {
      return $this->created_at->format('d M Y');
    }
}
