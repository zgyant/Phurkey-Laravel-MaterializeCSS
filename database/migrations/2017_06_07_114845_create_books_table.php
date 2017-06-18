<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name');
            $table->string('authur_name');
            $table->string('publisher_name');
            $table->string('genre');
            $table->string('uploader_email');
            $table->text('description');
            $table->integer('price');
            $table->text('image');
            $table->text('book_condition');
            $table->boolean('exse');
            $table->boolean('activated');

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
        Schema::dropIfExists('books');
    }
}
