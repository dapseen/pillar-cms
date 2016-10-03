<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique;
            $table->integer('phone');
            $table->string('gender');
            $table->string('occupation');
            $table->string('marital_status');
            $table->string('date_of_birth');
            $table->string('home_address');
            $table->string('office_address');
            $table->string('street')->unsigned()->index();
            $table->integer('hop_id')->unsigned()->index();
            $table->integer('contacttype_id')->unsigned()->index();
            $table->integer('fellowship_id')->unsigned()->index();
            $table->integer('coverage_id')->unsigned()->index();
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
        Schema::drop('contacts');
    }
}
