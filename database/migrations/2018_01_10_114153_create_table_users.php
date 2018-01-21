<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Username')->nullable();
            $table->string('Email');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('password');
            $table->string('Address');
            $table->string('City');
            $table->string('Country');
            $table->integer('Postcode');
            $table->enum('utype',['admin','user'])->default('user');
            $table->boolean('status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
