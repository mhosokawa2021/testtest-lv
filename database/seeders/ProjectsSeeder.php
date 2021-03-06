<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'user_id' => 1,
            'creator_id' => 2,
            'project_title' => "アートエキスポ2019・ポスターイラスト",
            'complete_img_url' => "アートエキスポ2019のポスター用のイラストを描いてくれる方を募集しています。",
            'img_url' => 'plan_ico04.png',
            'is_finished' => 0,
            'is_canceled' => 0
        ]);
        Project::create([
            'user_id' => 3,
            'creator_id' => 2,
            'project_title' => "テスト用タイトル",
            'complete_img_url' => "",
            'img_url' => 'p_icon.png',
            'is_finished' => 0,
            'is_canceled' => 0
        ]);
    }
}
