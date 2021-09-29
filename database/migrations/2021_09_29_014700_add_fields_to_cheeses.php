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
            $table->string('headline', 250)->default('Král Sýrů');
            $table->string('subheadline', 250)->default('');
            $table->string('shop_1_logo', 250)->default('');
            $table->string('shop_1_text', 250)->default('Albert');
            $table->string('shop_1_link', 250)->default('');
            $table->string('shop_2_logo', 250)->default('');
            $table->string('shop_2_text', 250)->default('Globus');
            $table->string('shop_2_link', 250)->default('');
            $table->string('shop_3_logo', 250)->default('');
            $table->string('shop_3_text', 250)->default('Tesco');
            $table->string('shop_3_link', 250)->default('');
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
            $table->dropColumn('headline');
            $table->dropColumn('subheadline');
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
