<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phurkey_admins', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('admin_name',50);
            $table->string('admin_username',50)->unique();
            $table->string('password',250);
            $table->string('admin_type',50);
            $table->string('admin_email',50)->unique();
            $table->string('admin_contact',60);
            $table->boolean('activated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phurkey_admins', function (Blueprint $table) {
            //
            Schema::dropIfExists('phurkey_admins');
        });
    }
}
