<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CreatorPlanProc;

class CreatorPlanProcsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        CreatorPlanProc::create([
            'sort_order' => 1,
            'proc_name' => 'ラフ',
            'proc_number_max' => 5,
            'proc_number_min' => 1,
            'creator_plan_id' => 1
        ]);
        CreatorPlanProc::create([
            'sort_order' => 1,
            'proc_name' => 'ラフ',
            'proc_number_max' => 5,
            'proc_number_min' => 1,
            'creator_plan_id' => 3
        ]);
        CreatorPlanProc::create([
            'sort_order' => 2,
            'proc_name' => '下書き',
            'proc_number_max' => 5,
            'proc_number_min' => 1,
            'creator_plan_id' => 3
        ]);
        CreatorPlanProc::create([
            'sort_order' => 3,
            'proc_name' => '完成',
            'proc_number_max' => 5,
            'proc_number_min' => 1,
            'creator_plan_id' => 3
        ]);
    }
}
