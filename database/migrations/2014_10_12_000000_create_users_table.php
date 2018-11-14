<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('role')->nullable();
            $table->binary('isActive')->nullable();
            $table->integer('manager')->nullable();
            $table->string('avatar')->nullable();
            $table->string('fName')->nullable();
            $table->string('sName')->nullable();
            $table->string('lName')->nullable();
            $table->string('shortName')->nullable();
            $table->string('phone')->nullable();
            $table->string('intPhone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
