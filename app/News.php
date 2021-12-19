<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class News extends Model
{
	   public function getCustomDateAttribute() {
      return $this->created_at->format('d M Y');
    }
     public function category() {
        return $this->belongsTo(Category::class);
    }
   
}
