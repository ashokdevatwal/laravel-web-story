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
}
