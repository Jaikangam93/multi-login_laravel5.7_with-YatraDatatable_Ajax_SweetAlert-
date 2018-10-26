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
            $table->string('name');
            $table->string('role');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobilenumber');
            $table->string('location');
            $table->string('avatar')->default('default.jpg');
            $table->timestamp('email_verified_at')->nullable(); 
            $table->boolean('isactive')->nullable();
            $table->string('mod_by')->nullable();
            $table->boolean('forgotpassword')->nullable();
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
