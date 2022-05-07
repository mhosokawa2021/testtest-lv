<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectMessage;

class ProjectMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectMessage::create([
            'project_id' => 1,
            'user_id' => 2,
            'plan_request_id' => null,
            'free_request_id' => null,
            'message' => '興味あります。',
        ]);
        ProjectMessage::create([
            'project_id' => 2,
            'user_id' => 2,
            'plan_request_id' => null,
            'free_request_id' => null,
            'message' => '興味あります2。',
        ]);
    }
}
