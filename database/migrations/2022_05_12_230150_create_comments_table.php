<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->text("content");

            $table->unsignedBigInteger("blog_post_id")->index();

            $table->foreign("blog_post_id")->references("id")->on("blog_posts")->onDelete("CASCADE");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
