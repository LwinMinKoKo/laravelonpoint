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
        \App\Models\Article::factory()->create

([
            'Title' => Str::random(10),
            'Description'=> Str::random(20),
            'Body'=> Str::random(200),
            'categeory_id'=>Str::random(5),
            // 'email' => Str::random(10).'@gmail.com',
            // 'password' => Hash::make('password'),
       
        ]);
    }
}


              // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',