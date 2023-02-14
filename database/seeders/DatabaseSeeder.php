<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    \App\Models\Article::factory(10)->create();
    \APP\Models\Category::factory(5)->create();
    \APP\Models\Comment::factory(40)->create();    
        
    }
}