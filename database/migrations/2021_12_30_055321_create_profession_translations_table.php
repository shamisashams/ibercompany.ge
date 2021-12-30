<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profession_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profession_id')->unsigned();
            $table->string("locale")->index();

            $table->string('title')->nullable();
            $table->longText('description')->nullable();

            $table->unique(['profession_id', 'locale']);
            $table->foreign('profession_id')
                ->references('id')
                ->on('professions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profession_translations');
    }
}
