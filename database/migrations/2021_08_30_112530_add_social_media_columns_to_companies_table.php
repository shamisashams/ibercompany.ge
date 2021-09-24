<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialMediaColumnsToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('youtube')->after('youtube_link')->nullable();
            $table->string('pinterest_link')->after('youtube_link')->nullable();
            $table->string('twitter_link')->after('youtube_link')->nullable();
            $table->string('instagram_link')->after('youtube_link')->nullable();
            $table->string('linkedin_link')->after('youtube_link')->nullable();
            $table->string('facebook_link')->after('youtube_link')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('facebook_link');
            $table->dropColumn('linkedin_link');
            $table->dropColumn('instagram_link');
            $table->dropColumn('twitter_link');
            $table->dropColumn('pinterest_link');
            $table->dropColumn('youtube');
        });
    }
}
