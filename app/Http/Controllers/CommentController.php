<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Auth;
use App\Http\Requests\CommentCreateRequest;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web,admin');
    }
    public function store(CommentCreateRequest $request)
    {
        $user = Auth::user();
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $user->comment()->save($comment);
        return redirect()->back()->with('status', 'Successfully Added');
    }
}