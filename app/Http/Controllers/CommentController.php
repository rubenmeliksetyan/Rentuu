<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Article;
use App\Models\Comment;
use App\Services\ICommentService;

class CommentController extends Controller
{
    public function __construct(private ICommentService $commentService)
    {
    }

    public function create(Article $article, CommentRequest $request): Comment
    {
        return $this->commentService->create($article, $request->only(['title', 'body']));
    }
}
