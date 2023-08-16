<?php

use Devatwal\LaravelWebStory\Http\Controllers\WebStoryController;

Route::get('web-stories', [ WebStoryController::class,'index' ]);
