<?php

namespace App\Services;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

final class TagService implements ITagService
{
    public function find(): Collection
    {
        return Tag::all();
    }
}
