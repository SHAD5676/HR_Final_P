<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // This function handles the Home Page
    public function index()
    {
        return view('frontend.index');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function about()
    {
        return view('frontend.about');
    }
}