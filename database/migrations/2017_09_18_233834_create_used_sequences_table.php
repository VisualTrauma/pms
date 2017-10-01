<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsedSequencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('used_sequences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sequence_id');
            $table->unsignedInteger('job_plan_id')->nullable();
            $table->unsignedInteger('safety_instruction_id')->nullable();
            $table->text('details');
            $table->unsignedInteger('added_by');
            $table->softDeletes();
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
        Schema::dropIfExists('used_sequences');
    }
}
