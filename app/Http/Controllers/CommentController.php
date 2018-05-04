<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Post $post)
    {
        $this->validate(request(), [ 'body' => 'required|min:2']);

        $post->addComments(request('body'));

        return back();
    }
}
