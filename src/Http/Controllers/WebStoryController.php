<?php

namespace Devatwal\LaravelWebStory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WebStoryController extends Controller
{
    public function index() {
        return "hello";
    }
}