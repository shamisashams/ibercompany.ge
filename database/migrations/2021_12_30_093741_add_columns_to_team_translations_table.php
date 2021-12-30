<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTeamTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team_translations', function (Blueprint $table) {
            $table->string("hobby")->nullable();
            $table->string("super_power")->nullable();
            $table->string("favorite")->nullable();
            $table->string("content")->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team_translations', function (Blueprint $table) {
            $table->dropColumn("hobby");
            $table->dropColumn("super_power");
            $table->dropColumn("favorite");
            $table->longText('content')->change();
        });
    }
}
