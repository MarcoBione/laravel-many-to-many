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
        Schema::create('technology_projects', function (Blueprint $table) {

            //collegamento con tabella projects
            $table->unsignedBigInteger('projects_id');
            $table->foreign('projects_id')->references('id')->on('projects');

            //collegamento con tabella technology
            $table->unsignedBigInteger('technologies_id');
            $table->foreign('technologies_id')->references('id')->on('technologies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technology_projects');
    }
};
