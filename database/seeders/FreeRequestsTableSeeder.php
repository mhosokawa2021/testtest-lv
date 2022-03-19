<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FreeRequest; // 追記

class FreeRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creator id:2に対する自由依頼
        FreeRequest::create([
            'user_id' => 1,
            'creator_id' => 2,
            'message' => 'user:1 creator:2 自由依頼01の依頼メッセージです。',
            'is_canceled' => 0,
            'is_finished' => 0
        ]);
        FreeRequest::create([
            'user_id' => 3,
            'creator_id' => 2,
            'message' => 'user:3 creator:2 自由依頼02の依頼メッセージです。',
            'is_canceled' => 0,
            'is_finished' => 0
        ]);
        FreeRequest::create([
            'user_id' => 4,
            'creator_id' => 2,
            'message' => 'user:4 creator:2 自由依頼03の依頼メッセージです。',
            'is_canceled' => 0,
            'is_finished' => 0
        ]);
    }
}
