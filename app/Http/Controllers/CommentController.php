<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentController extends Controller
{
    public function store(Movie $movie, Request $request){

        $this->validate($request, [
            'content' => 'required|min:3',
        ]);

        
        $comment = new Comment;
        $comment->movie_id = $movie->id;
        $comment->content = $request->content;
        $comment->save();
        return back();
    }
}
