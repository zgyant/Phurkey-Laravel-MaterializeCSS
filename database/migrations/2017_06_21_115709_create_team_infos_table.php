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
            $table->string('Email',50)->unique();
            $table->string('Position');
            $table->string('Website');
            $table->integer('Contact_Number');
            $table->string('LinkedIn');
            $table->string('Twitter');
            $table->string('Facebook');
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
