<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlanMessage; // 追記

class PlanMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlanMessage::create([
            'message' => 'plan_id:1に対するuser_id:1からのなんかいい感じのプロジェクトのコメント',
            'plan_id' => 1,
            'user_id' => 1
        ]);

        PlanMessage::create([
            'message' => 'plan_id:2に対するuser_id:2からのなんかいい感じのプロジェクトのコメント',
            'plan_id' => 2,
            'user_id' => 2
        ]);

        PlanMessage::create([
            'message' => 'plan_id:2に対するuser_id:1からのなんかいい感じのプロジェクトのコメント',
            'plan_id' => 2,
            'user_id' => 1
        ]);

        PlanMessage::create([
            'message' => 'plan_id:3に対するuser_id:1からのなんかいい感じのプロジェクトのコメント',
            'plan_id' => 3,
            'user_id' => 1
        ]);
        
        PlanMessage::create([
            'message' => 'plan_id:3に対するuser_id:1からのなんかいい感じのプロジェクトのコメント',
            'plan_id' => 3,
            'user_id' => 1
        ]);
        PlanMessage::create([
            'message' => 'plan_id:3に対するuser_id:2からのなんかいい感じのプロジェクトのコメント',
            'plan_id' => 3,
            'user_id' => 2
        ]);
    }
}
