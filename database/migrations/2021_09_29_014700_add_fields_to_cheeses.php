<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCheeses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cheeses', function (Blueprint $table) {
            $table->boolean('new_design')->default(0);
            $table->string('headline', 250)->nullable();
            $table->string('subheadline', 250)->nullable();
            $table->boolean('show_shops')->default(0);
            $table->string('shop_1_logo', 250)->nullable();
            $table->string('shop_1_text', 250)->nullable();
            $table->string('shop_1_link', 250)->nullable();
            $table->string('shop_2_logo', 250)->nullable();
            $table->string('shop_2_text', 250)->nullable();
            $table->string('shop_2_link', 250)->nullable();
            $table->string('shop_3_logo', 250)->nullable();
            $table->string('shop_3_text', 250)->nullable();
            $table->string('shop_3_link', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cheeses', function (Blueprint $table) {
            $table->dropColumn('new_design');
            $table->dropColumn('headline');
            $table->dropColumn('subheadline');
            $table->dropColumn('show_shops');
            $table->dropColumn('shop_1_logo');
            $table->dropColumn('shop_1_text');
            $table->dropColumn('shop_1_link');
            $table->dropColumn('shop_2_logo');
            $table->dropColumn('shop_2_text');
            $table->dropColumn('shop_2_link');
            $table->dropColumn('shop_3_logo');
            $table->dropColumn('shop_3_text');
            $table->dropColumn('shop_3_link');
        });
    }
}
