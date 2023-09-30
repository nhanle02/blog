<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('status')->comment('1: active, 2: deactivated');
            $table->integer('create_by')->unsigned();
            $table->integer('update_by')->unsigned()->nullable();
            $table->tinyInteger('comment_status')->comment('1: cho phep, 2: khong cho phep')->nullable();
            $table->tinyInteger('is_featured')->comment('0: noi bat, 1: khong noi bac')->nullable();
            $table->integer('comment_count')->default('0')->nullable();
            $table->integer('views')->default('0')->nullable();
            $table->string('image', 255)->nullable();
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
        Schema::dropIfExists('posts');
    }
}
