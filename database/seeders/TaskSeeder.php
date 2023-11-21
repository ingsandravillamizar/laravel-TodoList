<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $task = new Task();
        // $task->name = 'Validacion Cierre';
        // $task->description = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
        // $task->priority = 1;
        // $task->save();

        // $task2 = new Task();
        // $task2->name = 'Validacion Anulacion Fac';
        // $task2->description = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
        // $task2->priority = 2;
        // $task2->save();

        Task::factory(200)->create();
    }
}





 