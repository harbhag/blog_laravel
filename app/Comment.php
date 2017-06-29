<?php

namespace App;

class Comment extends Model
{
    public function post(){
      //return $this->belongsTo('App\Post');
      return $this->belongsTo(Post::class);
    }
}
