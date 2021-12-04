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
            $table->increments("id");
            $table->integer("user_id")->unsigned()->index();
            $table->string("title")->comment("Post Header");
            $table->text("content");
            $table->string("image")->nullable();
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete();

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
