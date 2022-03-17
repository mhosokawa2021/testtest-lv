<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // 追記
use App\Models\Tweet; // 追記
use App\Models\Tag; // 追記忘れずに！

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // 追記開始

        Tag::create([
            'name' => 'ライフハック'
        ]);

        Tag::create([
            'name' => 'エッセイ'
        ]);

        Tag::create([
            'name' => 'お知らせ'
        ]);

        User::create([
            'name' => 'テストユーザ',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
        
        User::create([
            'name' => 'テストユーザ-2',
            'email' => 'test@example-2.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'テストユーザ-3',
            'email' => 'test@example-3.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'ぼやき太郎',
            'email' => 'boyaki@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'ぼやき次郎',
            'email' => 'boyaki@example2.com',
            'password' => bcrypt('password'),
        ]);

        Tweet::create([
            'message' => 'テストユーザによる投稿',
            'user_id' => 1
        ]);

        Tweet::create([
            'message' => 'ぼやき太郎による投稿',
            'user_id' => 2
        ]);

        // planデータ
         $this->call(PlansTableSeeder::class);
         $this->call(CreatorsTableSeeder::class);
         // planへのコメント
         $this->call(PlanMessagesTableSeeder::class);
        //creatorplan (1)
         $this->call(CreatorPlanTableSeeder::class);
         // creatorplan procs(2)
         $this->call(CreatorPlanProcsTableSeeder::class);
    }
}
