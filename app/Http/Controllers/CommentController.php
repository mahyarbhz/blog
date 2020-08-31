<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $this->validate(request (), [ // Validating
            'comment' => 'required', // Validating
        ]);
        $article_id = $article->id;
        $user_id = auth()->user()->id;
        Comment::create([
            'user_id' => $user_id,
            'article_id' => $article_id,
            'comment' => $request['comment']
        ]);
        return redirect('/detail/'.$article_id);
    }
}
