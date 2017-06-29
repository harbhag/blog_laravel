<?php

namespace App;

class Post extends Model
{
  public function comments(){

    //return $this->hasMany('App\Comment');
    return $this->hasMany(Comment::class);

  }

  public function addComment($body){

    Comment::create([
      'body'=>request('body'),
      'post_id'=>$this->id
    ]);

  }
}
