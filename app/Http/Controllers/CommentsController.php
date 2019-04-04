<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
   
    public function store(Request $request){
        //create comments
        $comment = new Comment;
        $comment->body= $request->get('comment_body');
        $comment->user()->associate($request->user());
        //$comment->parent_id = $request->get('id'); 
        $post= Post::find($request->post_id);
        $post->comments()->save($comment);
        
        return back();
    }

    
    
}
