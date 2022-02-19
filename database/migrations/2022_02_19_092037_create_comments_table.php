<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up(): void 
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('content', 255);
            $table->foreignId('post_id');

            $table->foreign('post_id')->references('id')->on('posts');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
}
