<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;

class Category extends Model
{
    public function blogs() {
        return $this->hasMany(Blog::class)->whereStatus(1)->take(2);
    }
}
