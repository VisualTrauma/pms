<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBomPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bom_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bill_of_material_id');
            $table->unsignedInteger('number');
            $table->text('description');
            $table->unsignedInteger('quantity');
            $table->text('comment');
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
        Schema::dropIfExists('bom_parts');
    }
}
