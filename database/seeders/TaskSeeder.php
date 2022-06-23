<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();

        Task::insert([
            [
                'id'         => 1,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 2,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 3,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 4,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 5,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 6,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 7,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 8,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 9,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 10,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 11,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 12,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 13,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 14,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 15,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 16,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 17,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 18,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 19,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 20,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 21,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 22,
                'content'    => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
