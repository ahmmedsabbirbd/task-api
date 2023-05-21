<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Task::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // \App\Models\Task::factory()->create([ 
        //     'id'=>'30536',
        //     'name'=>'Mrs. Rozella',
        //     'phone'=>'1-828-915-8003',
        //     'iscomplete'=>0,
        //     'isTrue'=>1,
        // ]);
    }
}
