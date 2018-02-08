<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicepackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicepackages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('packagename');
            $table->string('packageservice1');
            $table->string('packageservice2');
            $table->string('packageservice3');
            $table->string('packageservice4');
            $table->string('packageservice5');
            $table->integer('packageprice');
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
        Schema::dropIfExists('servicepackages');
    }
}
