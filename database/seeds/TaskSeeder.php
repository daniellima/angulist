<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $tasks = [
            [
                'name' => 'do it'
            ],
            [
                'name' => 'really do it'
            ],
            [
                'name' => 'just do it again'
            ],
            [
                'name' => 'until you make it!'
            ]
        ];

        foreach($tasks as $task){
            Task::create($task);
        }
    }
}
