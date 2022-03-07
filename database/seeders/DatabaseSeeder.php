<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // 追記
use App\Models\Tweet; // 追記

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
        User::create([
            'name' => 'テストユーザ',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'ぼやき太郎',
            'email' => 'boyaki@example.com',
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
        // 追記終了
    }
}
