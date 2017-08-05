<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use App\Http\Requests;

class CommentsController extends Controller
{
    //

    public function store($post)
{
    Comment::create([
        'body' => request('body'),
        'post_id' => $post
    ]);

    return back();
}
}

