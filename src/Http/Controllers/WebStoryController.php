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
}
