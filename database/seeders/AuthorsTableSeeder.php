<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Command: php artisan db:seed --class=AuthorsTableSeeder
     */
    public function run()
    {
        $authors = [
            [
                'name' => 'John Smith',
                'email' => 'johnsmith@example.com',
                'address' => '123 Main St, Anytown',
                'username' => 'jsmith',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'address' => '456 Oak St, Sometown',
                'username' => 'jdoe',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bobjohnson@example.com',
                'address' => '789 Pine St, Yourtown',
                'username' => 'bjohnson',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Alice Williams',
                'email' => 'alicewilliams@example.com',
                'address' => '321 Elm St, Mytown',
                'username' => 'awilliams',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charliebrown@example.com',
                'address' => '654 Spruce St, Thistown',
                'username' => 'cbrown',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($authors as $author) {
            DB::table('authors')->insert($author);
        }
    }
}
