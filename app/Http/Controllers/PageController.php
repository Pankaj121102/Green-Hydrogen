<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pages($page)
    {
        // Check if the requested page view exists
        if (view()->exists("pages.$page")) {
            return view("pages.$page");
        } else {
            abort(404); // Display a 404 error if the page doesn't exist
        }
    }
}
