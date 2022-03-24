<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlanRequestProc;

class PlanRequestProcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // お手軽プラン
        PlanRequestProc::create([
            'sort_order' => 1,
            'proc_name' => 'ラフ',
            'proc_number_max' => 3,
            'proc_number_min' => 5,
            'plan_request_id' => 1
        ]);
        PlanRequestProc::create([
            'sort_order' => 2,
            'proc_name' => '線画',
            'proc_number_max' => 3,
            'proc_number_min' => 2,
            'plan_request_id' => 1
        ]);
        PlanRequestProc::create([
            'sort_order' => 3,
            'proc_name' => '着彩',
            'proc_number_max' => 2,
            'proc_number_min' => 1,
            'plan_request_id' => 1
        ]);
        PlanRequestProc::create([
            'sort_order' => 4,
            'proc_name' => '完成',
            'proc_number_max' => 1,
            'proc_number_min' => 1,
            'plan_request_id' => 1
        ]);
        // 本格プラン
        PlanRequestProc::create([
            'sort_order' => 1,
            'proc_name' => 'ラフ',
            'proc_number_max' => 3,
            'proc_number_min' => 5,
            'plan_request_id' => 2
        ]);
        PlanRequestProc::create([
            'sort_order' => 2,
            'proc_name' => '線画',
            'proc_number_max' => 3,
            'proc_number_min' => 2,
            'plan_request_id' => 2
        ]);
        PlanRequestProc::create([
            'sort_order' => 3,
            'proc_name' => '着彩',
            'proc_number_max' => 2,
            'proc_number_min' => 1,
            'plan_request_id' => 2
        ]);
        PlanRequestProc::create([
            'sort_order' => 4,
            'proc_name' => '完成',
            'proc_number_max' => 1,
            'proc_number_min' => 1,
            'plan_request_id' => 2
        ]);
    }
}
