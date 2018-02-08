<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCliencompanylogoTestimonials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testimonials',function(Blueprint $table){
           $table->string('clientcompanylogo',100)->after('testownerinfo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testimonials',function(Blueprint $table){
            $table->dropColumn('clientcompanylogo');
        });
    }
}
