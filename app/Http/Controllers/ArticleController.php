<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\IArticleService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleController extends Controller
{
    public function __construct(private IArticleService $articleService)
    {
    }

    public function index(Request $request): LengthAwarePaginator
    {
        return $this->articleService->getAll($request->per_page, $request->tag);
    }

    public function show(string $slug): Article
    {
        return $this->articleService->getOne($slug);
    }

    public function like(string $slug)
    {
        $this->articleService->like($slug);
        return response()->status(200);
    }
}
