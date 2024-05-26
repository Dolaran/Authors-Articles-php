<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Command: php artisan db:seed --class=ArticlesTableSeeder
     */
    public function run()
    {
        $articles = [
            [
                'author_id' => 1,
                'topic' => 'Science',
                'title' => 'The Future of AI',
                'content' => Str::random(100),
                'created_at' => '2024-04-30 22:44:26',
            ],
            [
                'author_id' => 2,
                'topic' => 'Technology',
                'title' => 'The Rise of Quantum Computing',
                'content' => Str::random(100),
                'created_at' => '2021-05-18 02:47:12',
            ],
            [
                'author_id' => 3,
                'topic' => 'Health',
                'title' => 'The Impact of COVID-19',
                'content' => Str::random(100),
                'created_at' => '2019-07-24 00:00:00',
            ],
            [
                'author_id' => 4,
                'topic' => 'Environment',
                'title' => 'Climate Change and Its Effects',
                'content' => Str::random(100),
                'created_at' => '2017-02-03 00:00:00',
            ],
            [
                'author_id' => 5,
                'topic' => 'Politics',
                'title' => 'The 2020 Election',
                'content' => Str::random(100),
                'created_at' => '2014-11-12 00:00:00',
            ],
        ];

        foreach ($articles as $article) {
            DB::table('articles')->insert($article);
        }
    }
}
