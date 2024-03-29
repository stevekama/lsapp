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
        $title = "Welcome to About Page";
        return view('pages.about')->with('title', $title);
    }

    // about page
    public function services(){
        $data = array(
            'title'=> 'Our Services',
            'services' => ['web design', 'CMS', 'SEO']
        );
        return view('pages.services')->with($data);
    }
    
}
