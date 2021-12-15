<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id')->nullable()->constrained()->onDelete('set null');
            $table->string('title');
            $table->string('slug');
            $table->string('image_url');  
            $table->string('trailer_video_url');  
            $table->text('description');  
            $table->text('long_description');
            $table->date('release_date');
            $table->string('developer');  
            $table->string('publisher');
            $table->unsignedInteger('price');
            $table->boolean('is_adult_content');  
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
}
