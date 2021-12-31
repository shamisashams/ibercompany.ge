<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnsInPageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_translations', function (Blueprint $table) {
            $table->renameColumn('title', 'title_1');
            $table->renameColumn('description', 'content_1');
            $table->string('title_2')->after('title')->nullable();
            $table->longText('content_2')->after('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_translations', function (Blueprint $table) {
            $table->renameColumn('title_1', 'title');
            $table->renameColumn('content_1', 'description');
            $table->dropColumn('title_2');
            $table->dropColumn('content_2');
        });
    }
}
