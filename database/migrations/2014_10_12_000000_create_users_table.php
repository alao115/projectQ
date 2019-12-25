<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyname');
            $table->string('country');
            $table->string('email')->unique();
            $table->string('fullname');
            $table->string('mtnphonenumber');
            $table->string('password');
            $table->string('state');
            $table->string('username');
            $table->string('clientid');
            $table->string('documenturl');
            $table->string('termsandcondition');
            $table->string('clientidmoov');
            $table->string('merchantnumber');
            $table->timestamp('email_verified_at')->nullable();
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
