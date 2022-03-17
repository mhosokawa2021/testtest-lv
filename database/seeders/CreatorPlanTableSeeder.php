<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CreatorPlan;

class CreatorPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CreatorPlan::create([
            'creator_plan_name' => 'Aプラン',
            'creator_id' => 1
        ]);
        CreatorPlan::create([
            'creator_plan_name' => 'Bプラン',
            'creator_id' => 1
        ]);
        CreatorPlan::create([
            'creator_plan_name' => 'お手軽プラン',
            'creator_id' => 2
        ]);
        CreatorPlan::create([
            'creator_plan_name' => '本格プラン',
            'creator_id' => 2
        ]);
    }
}
