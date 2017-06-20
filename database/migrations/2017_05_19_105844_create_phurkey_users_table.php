<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhurkeyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phurkey_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name',50);
            $table->string('username',50)->unique();
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->string('reg_ip_address',50);
            $table->string('reg_date');
            $table->string('sex')->nullable();
            $table->string('date_ob')->nullable();
            $table->string('address',100)->nullable();
            $table->string('contact_num',100)->nullable();
            $table->text('profile_image')->nullable();
            $table->text('descriptions')->nullable();
            $table->string('conf_code',100)->unique();
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
        Schema::dropIfExists('phurkey_users');
    }
}
