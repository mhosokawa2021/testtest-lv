<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creator_plan_procs', function (Blueprint $table) {
            $table->id();
            $table->integer('sort_order');
            $table->string('proc_name');
            $table->integer('proc_number_max');
            $table->integer('proc_number_min');
            $table->foreignId('creator_plan_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creator_plan_procs');
    }
};
