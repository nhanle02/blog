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
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('username', 100)->unique();
            $table->string('display_name', 100)->nullable();
            $table->string('email', 200)->unique();
            $table->string('password', 100);
            $table->string('gender', 20)->nullable();
            $table->string('phone', 30)->nullable();
            $table->text('about')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('avatar')->nullable();
            $table->tinyInteger('role')->comment('1: supper admin, 2: editor, 3: user');
            $table->tinyInteger('status')->comment('1: active, 2: deactivated');
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
