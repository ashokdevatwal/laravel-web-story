<?php

use Devatwal\LaravelWebStory\Http\Controllers\WebStoryController;

Route::get('web-stories', [WebStoryController::class, 'index'])->name('web-stories.landing');
Route::get('web-stories/{web_story}', [WebStoryController::class, 'getWebStory'])->name('web-stories.view');
