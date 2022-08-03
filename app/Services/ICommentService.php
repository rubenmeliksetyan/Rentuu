<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Comment;

interface ICommentService
{
    public function create(Article $article, array $comment): Comment;
}
