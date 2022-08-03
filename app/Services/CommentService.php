<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Comment;

class CommentService implements ICommentService
{

    public function create(Article $article, array $comment): Comment
    {
        return $article->comments()->create(['title' => $comment['title'], 'body' => $comment['body']]);
    }
}
