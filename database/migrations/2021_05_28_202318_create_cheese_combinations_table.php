<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheeseCombinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheese_combinations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cheese_id')->unsigned();
            $table->text('nuts');
            $table->text('fruit_fresh');
            $table->text('fruit_dried');
            $table->text('vegetables');
            $table->text('marmelade');
            $table->text('wine_general');
            $table->text('wine_special');
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
        Schema::dropIfExists('cheese_combinations');
    }
}
