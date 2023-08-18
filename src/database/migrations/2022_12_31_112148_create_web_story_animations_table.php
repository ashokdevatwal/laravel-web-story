<?php

use Devatwal\LaravelWebStory\Models\WebStoryAnimation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebStoryAnimationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_story_animations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('value', 50);
            $table->timestamps();
        });

        $animations = [
            [
                'name'  => 'Fly In Left',
                'value' => 'fly-in-left',
            ],
            [
                'name'  => 'Fade In',
                'value' => 'fade-in',
            ],
            [
                'name'  => 'Twirl In',
                'value' => 'twirl-in',
            ],
            ['name' => 'Fly In Right',      'value' => 'fly-in-right'],
            ['name' => 'Fly In Top',        'value' => 'fly-in-top'],
            ['name' => 'Fly In Bottom',     'value' => 'fly-in-bottom'],
            ['name' => 'Rotate In Left',    'value' => 'rotate-in-left'],
            ['name' => 'Rotate In Right',   'value' => 'rotate-in-right'],
            ['name' => 'Drop In',           'value' => 'drop'],
            ['name' => 'Whoosh In Left',    'value' => 'whoosh-in-left'],
            ['name' => 'Whoosh In Right',   'value' => 'whoosh-in-right'],
            ['name' => 'Zoom In',           'value' => 'zoom-in'],
            ['name' => 'Zoom Out',          'value' => 'zoom-out'],
            ['name' => 'Pan Left',          'value' => 'pan-left'],
            ['name' => 'Pan Right',         'value' => 'pan-right'],
            ['name' => 'Pan Up',            'value' => 'pan-up'],
            ['name' => 'Pan Down',          'value' => 'pan-down'],
        ];

        collect($animations)->each(function ($animation) { WebStoryAnimation::create($animation); });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_story_animations');
    }
}
