<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create(Request $request)
    {

        $validated = $request->validate([

            'author_id' => 'required',
            'content' => 'required',
            'serie_id' => 'required',
            'rating' => 'required',
        ]);

        $comment = new Comment;
        $comment->serie_id = $request->serie_id;
        $comment->author_id = $request->author_id;
        $comment->content = $request->content;
        $comment->rating = $request->rating;
        $comment->date = now();

        $comment->save();
        return redirect('/series/' . $request->id)->with('status', 'Commentaire créé !');
    }
}
