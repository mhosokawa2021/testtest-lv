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
            'plan_title' => 'アートエキスポ2019・ポスターイラスト',
            'plan_text' => 'アートエキスポ2019のポスター用のイラストを描いてくれる方を募集しています。',
            'img_url' => 'plan_ico04.png',
            'is_close' => 0,
            'user_id' => 1          
        ]);

        Plan::create([
            'plan_title' => 'PARTYのチラシ',
            'plan_text' => 'チラシを描いてくれる人を募集しています。',
            'img_url' => 'plan_ico05.png',
            'is_close' => 0,
            'user_id' => 2
        ]);

        Plan::create([
            'plan_title' => '小説の表紙を描いて欲しいです',
            'plan_text' => '小説の表紙を描いてくれる方を募集しています。',
            'img_url' => 'plan_ico06.png',
            'is_close' => 0,
            'user_id' => 2
        ]);

        Plan::create([
            'plan_title' => '合同紙イラストレーターさん募集',
            'plan_text' => '合同紙に参加してくれるイラストレーターさんを募集しています。',
            'img_url' => 'plan_ico01.png',
            'is_close' => 0,
            'user_id' => 3
        ]);

        Plan::create([
            'plan_title' => '合同紙イラストレーターさん募集',
            'plan_text' => '合同紙に参加してくれるイラストレーターさんを募集しています。',
            'img_url' => 'plan_ico03.png',
            'is_close' => 0,
            'user_id' => 3
        ]);
    }
}
