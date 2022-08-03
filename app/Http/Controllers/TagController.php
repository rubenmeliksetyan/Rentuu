<?php

namespace App\Http\Controllers;

use App\Services\ITagService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct(private ITagService $tagService)
    {
    }

    public function index(): Collection {
        return $this->tagService->find();
    }
}
