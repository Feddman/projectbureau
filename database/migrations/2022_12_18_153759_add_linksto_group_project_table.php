<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_project', function (Blueprint $table) {
            $table->string("trello_link")->nullable();
            $table->string("github_link")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('group_project', function (Blueprint $table) {
            $table->dropColumn("trello_link");
            $table->dropColumn("github_link");
        });
    }
};
