<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Adicionei a seeder apenas como uma outra possibilidade de semear o banco de dados.
        //$this->call(TaskSeeder::class);

        Task::factory(10)->create();
    }
}
