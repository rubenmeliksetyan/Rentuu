<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aggregate extends Model
{
    protected $table = 'articles_aggregate';

    use HasFactory;

    public function article(): BelongsTo {
        return $this->belongsTo(Article::class);
    }
}
