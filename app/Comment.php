<?php

namespace App;

class Comment extends Model
{
    //
    //comment->post
    public function post()
    {
        return $this->belongsTo(Posts::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
