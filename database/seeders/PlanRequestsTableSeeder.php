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
        //
        PlanRequest::create([
            'user_id' => 1,
            'creator_id' => 2,
            'creator_plan_id' => 3,
            'message' => 'user:1 creator:2 planid:3の依頼メッセージです。',
            'is_finished' => 0,
            'is_canceled' => 0
        ]);

        PlanRequest::create([
            'user_id' => 3,
            'creator_id' => 2,
            'creator_plan_id' => 4,
            'message' => 'user:1 creator:2 planid:4の依頼メッセージです。',
            'is_finished' => 0,
            'is_canceled' => 0
        ]);
    }
}
