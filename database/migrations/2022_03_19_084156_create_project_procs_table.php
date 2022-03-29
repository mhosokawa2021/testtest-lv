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
        Schema::create('project_procs', function (Blueprint $table) {
            $table->id();
		    $table->integer('proc_name_order');
		    $table->string('proc_name');
		    $table->text('img_url');
            $table->integer('sort_order');
	    	$table->boolean('is_checked');
	    	$table->boolean('is_finished');
		    $table->foreignId('project_id')->constrained();
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
        Schema::dropIfExists('project_procs');
    }
};
