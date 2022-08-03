<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

final class ArticleService implements IArticleService
{
    public function getAll($perPage = 10, int $tagId = null): LengthAwarePaginator
    {
        $query = Article::with('aggregate', 'tags', 'comments');

        if ($tagId) {
            $query->whereHas('tags', function ($q) use ($tagId) {
               $q->where('id', $tagId);
           });
        }

        return $query->paginate($perPage);
    }

    public function getOne(string $slug): Article
    {
        $article = $this->findOne($slug);
        return $this->incrementViewsCount($article);
    }

    public function like(string $slug): void
    {
        $article = $this->findOne($slug);
        $this->incrementLikesCount($article);
    }

    private function incrementViewsCount(Article $article): Article
    {
        $article->aggregate->increment('views');
        return $article;
    }

    private function incrementLikesCount(Article $article): Article
    {
        $article->aggregate->increment('likes');
        return $article;
    }

    private function findOne(string $slug): Article
    {
        return Article::with('aggregate', 'tags', 'comments')->where('slug', $slug)->firstOrFail();
    }
}
