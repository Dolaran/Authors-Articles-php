<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Command: php artisan migrate
     */
    public function up(): void
    {
        // Create authors table
        DB::statement("
            CREATE TABLE IF NOT EXISTS authors (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255),
                name VARCHAR(64) NOT NULL,
                address VARCHAR(255),
                username VARCHAR(16) NOT NULL,
                password VARCHAR(60) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            );
        ");

        // Create articles table
        DB::statement("
            CREATE TABLE IF NOT EXISTS articles (
                id INT AUTO_INCREMENT PRIMARY KEY,
                author_id INT,
                topic VARCHAR(128),
                title VARCHAR(128) NOT NULL,
                content TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (author_id) REFERENCES authors(id) ON DELETE CASCADE
            );
        ");
    }

    /**
     * Reverse the migrations.
     * Command: php artisan migrate:rollback
     */
    public function down(): void
    {
        // Drop articles table
        DB::statement("DROP TABLE IF EXISTS articles;");

        // Drop authors table
        DB::statement("DROP TABLE IF EXISTS authors;");
    }
};
