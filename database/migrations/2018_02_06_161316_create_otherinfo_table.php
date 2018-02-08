<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otherinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyaddress')->nullable()->default(null);
            $table->string('openinghour')->nullable()->default(null);
            $table->string('closinghour')->nullable()->default(null);
            $table->string('openingdayfrom')->nullable()->default(null);
            $table->string('closingdayto')->nullable()->default(null);
            $table->string('companylogo')->nullable()->default(null);
            $table->string('companynumber')->nullable()->default(null);
            $table->string('companyemail')->nullable()->default(null);
            $table->string('companyfax')->nullable()->default(null);
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
        Schema::dropIfExists('otherinfo');
    }
}
