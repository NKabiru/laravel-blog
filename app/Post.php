<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

//    $post->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComments($body)
    {
        $this->comments()->create(compact('body'));
    }
}
