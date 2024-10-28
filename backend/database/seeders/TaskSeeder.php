<?php

namespace Database\Seeders;

use App\Models\Task;;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Tarefa de Albert',
            'description' => 'Descrição da tarefa',
            'completed' => false,
        ]);

        Task::create([
            'title' => 'Tarefa Fatto',
            'description' => 'Descrição da tarefa',
            'completed' => true,
        ]);
    }
}
