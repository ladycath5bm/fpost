<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostVisitsTable extends Migration
{

    public function up(): void
    {
        Schema::create('post_visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained();
            $table->string('ip', 120);
            $table->string('browser', 120);
            $table->string('os', 120);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_visits');
    }
}
