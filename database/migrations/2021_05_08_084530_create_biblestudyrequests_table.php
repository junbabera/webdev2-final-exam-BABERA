<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiblestudyrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblestudyrequests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fullname', 100);
            $table->string('email');
            $table->bigInteger('contact');
            $table->date('birthdate');
            $table->string('religion');
            $table->date('date');
            $table->time('time');
            $table->string('location');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biblestudyrequests');
    }
}
