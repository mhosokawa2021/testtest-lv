<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlanRequest;

class PlanRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlanRequest::create([
            'user_id' => 1,
            'creator_id' => 2,
            'order_type' => 'P',
            'plan_title' => 'お手軽プラン',
            'message' => 'user:1 creator:2 お手軽プラン依頼メッセージです。',
            'is_finished' => 0,
            'is_canceled' => 0
        ]);
        PlanRequest::create([
            'user_id' => 1,
            'creator_id' => 2,
            'order_type' => 'P',
            'plan_title' => '本格プラン',
            'message' => 'user:1 creator:2 本格プランメッセージです。',
            'is_finished' => 0,
            'is_canceled' => 0
        ]);
        PlanRequest::create([
            'user_id' => 1,
            'creator_id' => 2,
            'order_type' => 'F',
            'plan_title' => '自由依頼',
            'message' => 'user:1 creator:2 自由依頼プランメッセージです。',
            'is_finished' => 0,
            'is_canceled' => 0
        ]);
    }
}
