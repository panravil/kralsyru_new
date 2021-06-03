<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWineCombinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wine_combination', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wine_id')->unsigned();
            $table->integer('cheese_id')->unsigned();
            $table->text('nuts');
            $table->text('fruit_fresh');
            $table->text('fruit_dried');
            $table->text('vegetables');
            $table->text('marmelade');
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
        Schema::dropIfExists('wine_combination');
    }
}
