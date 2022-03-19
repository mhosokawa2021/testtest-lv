<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FreeRequestProc; // 追記

class FreeRequestProcsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // request id:2
        FreeRequestProc::create([
            'sort_order' => 1,
            'proc_name' => 'ラフ',
            'proc_number_max' => 3,
            'proc_number_min' => 5,
            'free_request_id' => 2
        ]);
        FreeRequestProc::create([
            'sort_order' => 2,
            'proc_name' => '線画',
            'proc_number_max' => 1,
            'proc_number_min' => 3,
            'free_request_id' => 2
        ]);
        FreeRequestProc::create([
            'sort_order' => 3,
            'proc_name' => '着彩',
            'proc_number_max' => 1,
            'proc_number_min' => 1,
            'free_request_id' => 2
        ]);
        // free request id:1
        FreeRequestProc::create([
            'sort_order' => 1,
            'proc_name' => 'ラフ',
            'proc_number_max' => 3,
            'proc_number_min' => 5,
            'free_request_id' => 1
        ]);
        FreeRequestProc::create([
            'sort_order' => 2,
            'proc_name' => '線画',
            'proc_number_max' => 1,
            'proc_number_min' => 3,
            'free_request_id' => 1
        ]);
        FreeRequestProc::create([
            'sort_order' => 3,
            'proc_name' => '着彩',
            'proc_number_max' => 1,
            'proc_number_min' => 1,
            'free_request_id' => 1
        ]);
    }
}
