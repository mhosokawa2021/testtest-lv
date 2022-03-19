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
            'user_id' => 1,
            'plan_request_id' => null,
            'free_request_id' => null,
            'message' => 'project_id:1に対するuser_id:1からのなんかいい感じのプロジェクトのコメント',
        ]);
        ProjectMessage::create([
            'project_id' => 2,
            'user_id' => 1,
            'plan_request_id' => null,
            'free_request_id' => null,
            'message' => 'project_id:1に対するuser_id:1からのなんかいい感じのプロジェクトのコメント',
        ]);
    }
}
