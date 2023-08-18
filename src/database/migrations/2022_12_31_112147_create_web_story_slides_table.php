<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebStorySlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_story_slides', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('web_story_id');
            $table->bigInteger('template_id');
            $table->string('attributes_data', 2048);
            $table->integer('position');
            $table->boolean('status');
            $table->timestamp('published_at');
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
        Schema::dropIfExists('web_story_slides');
    }
}
