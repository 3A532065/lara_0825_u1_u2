<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
