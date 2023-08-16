<?php

namespace Devatwal\LaravelWebStory\Http\Controllers;

use Illuminate\Routing\Controller;

use Devatwal\LaravelWebStory\Models\WebStory;

class WebStoryController extends Controller
{
    public function index()
    {
        return WebStory::latest()->get();
    }

    public function getWebStory($web_story) {

        $webStory = WebStory::where('slug', $web_story)->first();

        if( ! $webStory )
            abort(404);

        return $webStory;
    }
}
