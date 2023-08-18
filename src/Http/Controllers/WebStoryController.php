<?php

namespace Devatwal\LaravelWebStory\Http\Controllers;

use Devatwal\LaravelWebStory\Models\WebStory;
use Illuminate\Routing\Controller;

class WebStoryController extends Controller
{
    public function index()
    {
        return WebStory::latest()->get();
    }

    public function getWebStory($web_story)
    {
        $webStory = WebStory::where('slug', $web_story)->first();

        if (!$webStory) {
            abort(404);
        }

        return $webStory;
    }
}
