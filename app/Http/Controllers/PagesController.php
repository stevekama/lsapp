<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // index page 
    public function index(){
        $title = 'Welcome To Laravel';
        return view('pages.index', compact('title'));
    }

    // about page
    public function about(){
        return view('pages.about');
    }

    // about page
    public function services(){
        return view('pages.services');
    }
    
}
