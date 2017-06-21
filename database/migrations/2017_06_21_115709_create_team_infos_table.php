<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Full_Name');
            $table->varchar('Email',50)->unique();
            $table->varchar('Website');
            $table->integer('Contact No.');
            $table->varchar('LinkedIn');
            $table->varchar('Twitter');
            $table->varchar('Facebook');
            $table->text('member_photo');
            $table->boolean('active');
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
        Schema::dropIfExists('team_infos');
    }
}
