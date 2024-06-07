<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['完了', '未完了', 'done', 'not done'];

        for ($i=1; $i<=30; $i++) {
            $status = $statuses[rand(0, count($statuses) - 1)];
            $user_id = rand(1, 3);
            DB::table('tasks')->insert([
                'content' => 'sample task ' . $i,
                'status' => $status,
                'user_id' => $user_id,
            ]);
        }
    }
}
