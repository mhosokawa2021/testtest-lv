<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan; // 追記忘れずに！

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'project_title' => 'なんかいい感じのプロジェクト',
            'project_text' => 'なんかいい感じのプロジェクトの説明文',
            'user_id' => 1
        ]);

        Plan::create([
            'project_title' => 'なんかいい感じのプロジェクト2021',
            'project_text' => 'なんかいい感じのコミックマーケットプロジェクトの説明文、天丼定食の話。',
            'user_id' => 2
        ]);

        Plan::create([
            'project_title' => '小説の表紙を描いて欲しいです',
            'project_text' => 'なんかいい感じのコミックマーケットプロジェクトの説明文',
            'user_id' => 2
        ]);

        Plan::create([
            'project_title' => '合同紙イラストレーターさん募集',
            'project_text' => 'なんかいい感じのコミックマーケットプロジェクトの説明文',
            'user_id' => 3
        ]);

        Plan::create([
            'project_title' => '合同紙イラストレーターさん募集',
            'project_text' => '小説のなんかいい感じのコミックマーケットプロジェクトの説明文',
            'user_id' => 3
        ]);
    }
}
