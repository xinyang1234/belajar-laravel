<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Egulias\EmailValidator\Result\Reason\DetailedReason;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DetailProfileSeeder::class,
            // PostSeeder::class,
            // CommentSeeder::class,
        ]);
    }
}
