<?php

namespace App\Articles;

use Illuminate\Database\Eloquent\Collection;
use App\Article;

class EloquentArticlesRepository implements ArticlesRepository
{
    public function search(string $query = ""): Collection
    {
        return Article::where('body', 'like', "%{$query}%")
            ->orWhere('title', 'like', "%{$query}%")
            ->get();
    }
}