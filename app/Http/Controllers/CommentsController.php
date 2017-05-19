<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentsController extends Controller
{
	protected $comment;
	public function__construct(Comment $comment)
	{
		$this->comment = $comment;
	}
    public function store (Request $request)
    {
    	$this->comment->create(request->all());
    	return redirect()->back();
    }
}
