<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function list(Request $request): View
    {
        $articles = DB::select('
            SELECT articles.id, authors.name, topic, title, articles.created_at
            FROM authors
            INNER JOIN articles ON authors.id = articles.author_id
            ORDER BY created_at DESC
            LIMIT 10;
        ');

        return view('articles.list', ['articles' => $articles]);
    }

    public function details(Request $request, int $id): View
    {
        $article = DB::select('
            SELECT articles.id, authors.name, topic, title, content, articles.created_at
            FROM authors
            INNER JOIN articles ON authors.id = articles.author_id
            WHERE articles.id = ?
        ', [$id]);

        if (empty($article)) {
            abort(404, 'Article not found');
        }

        return view('articles.details', ['article' => $article[0]]);
    }
}
