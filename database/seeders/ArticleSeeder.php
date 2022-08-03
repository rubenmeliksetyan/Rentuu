<?php

namespace Database\Seeders;

use App\Models\Aggregate;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Seeder;

final class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = Tag::factory(1)->make();
        Article::factory()->has(Aggregate::factory())->has(Tag::factory(2))->has(Comment::factory())->count(25)->create()->each(
            function ($article) use ($tag) {
                $article->tags()->saveMany($tag);
            }
        );
    }
}
