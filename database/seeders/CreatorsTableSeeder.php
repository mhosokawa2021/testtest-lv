<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Creator; // 追記忘れずに！

class CreatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Creator::create([
            'creator_name' => 'クリエイター太郎01',
            'creator_text' => 'クリエイター太郎01の説明',
            'user_id' => 1
        ]);
        Creator::create([
            'creator_name' => 'クリエイター太郎02',
            'creator_text' => 'クリエイター太郎02の説明',
            'user_id' => 2
        ]);
        Creator::create([
            'creator_name' => 'クリエイター太郎03',
            'creator_text' => 'クリエイター太郎03の説明',
            'user_id' => 3
        ]);
        Creator::create([
            'creator_name' => 'しろう',
            'creator_text' => 'クリエイター04の説明',
            'user_id' => 4
        ]);
    }
}
