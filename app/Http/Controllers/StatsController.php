<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    public function show(Request $request): View
    {
        $stats = [
            'authors_count' => DB::select('SELECT COUNT(*) as count FROM authors')[0]->count,
            'articles_count' => DB::select('SELECT COUNT(*) as count FROM articles')[0]->count,
            'authors_count_last_month' => DB::select('SELECT COUNT(*) as count FROM authors WHERE created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH)')[0]->count,
            'authors_last_registered' => DB::select('SELECT name FROM authors ORDER BY created_at DESC LIMIT 1')[0]->name,
            'authors_most_related' => DB::select('SELECT authors.name, COUNT(*) as count
                FROM authors
                INNER JOIN articles ON authors.id = articles.author_id
                GROUP BY authors.id
                ORDER BY count DESC
                LIMIT 1
            ')[0],
        ];

        return view('stats.show', ['stats' => $stats]);
    }
}
