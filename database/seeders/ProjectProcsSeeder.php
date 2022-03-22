<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectProc;

class ProjectProcsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id:1
        ProjectProc::create([
            'sort_order' => 1,
            'proc_name_order' => 1,
            'proc_name' => 'ラフ',
            'img_url' => '',
            'is_checked' => 0,
            'is_canceled' => 0,
            'project_id' => 1
        ]);
        ProjectProc::create([
            'sort_order' => 2,
            'proc_name_order' => 1,
            'proc_name' => 'ラフ',
            'img_url' => '',
            'is_checked' => 0,
            'is_canceled' => 0,
            'project_id' => 1
        ]);
        ProjectProc::create([
            'sort_order' => 3,
            'proc_name_order' => 1,
            'proc_name' => 'ラフ',
            'img_url' => '',
            'is_checked' => 0,
            'is_canceled' => 0,
            'project_id' => 1
        ]);

        // id:2
        ProjectProc::create([
            'sort_order' => 1,
            'proc_name_order' => 1,
            'proc_name' => 'ラフ',
            'img_url' => '',
            'is_checked' => 0,
            'is_canceled' => 0,
            'project_id' => 2
        ]);
        ProjectProc::create([
            'sort_order' => 1,
            'proc_name_order' => 2,
            'proc_name' => '線画',
            'img_url' => '',
            'is_checked' => 0,
            'is_canceled' => 0,
            'project_id' => 2
        ]);
        ProjectProc::create([
            'sort_order' => 1,
            'proc_name_order' => 3,
            'proc_name' => '着彩',
            'img_url' => '',
            'is_checked' => 0,
            'is_canceled' => 0,
            'project_id' => 2
        ]);
    }
}
