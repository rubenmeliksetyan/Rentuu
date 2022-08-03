<?php

namespace App\Providers;

use App\Http\Controllers\CommentController;
use App\Services\CommentService;
use App\Services\IArticleService;
use App\Services\ICommentService;
use App\Services\ITagService;
use App\Services\ArticleService;
use App\Services\TagService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IArticleService::class, ArticleService::class);
        $this->app->bind(ITagService::class, TagService::class);
        $this->app->bind(ICommentService::class, CommentService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
