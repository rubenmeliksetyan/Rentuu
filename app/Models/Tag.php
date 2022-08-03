<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $hidden = ['pivot'];

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'articles_tags');
    }
}
