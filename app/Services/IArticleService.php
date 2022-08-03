<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

interface IArticleService
{
    function getAll(int $perPage = 10, int $tagId = null): LengthAwarePaginator;

    function getOne(string $slug): Article;

    function like(string $slug): void;
}
