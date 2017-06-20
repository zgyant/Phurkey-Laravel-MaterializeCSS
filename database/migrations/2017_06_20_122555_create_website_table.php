<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('web_title',50)->nullable();
            $table->text('meta_desc')->nullable();
            $table->text('meta_key')->nullable();
            $table->text('about')->nullable();
            $table->string('contact',50)->nullable();
            $table->string('location',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('facebook',50)->nullable();
            $table->string('twitter',50)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_details');
    }
}
