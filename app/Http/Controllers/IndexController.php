<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function news(){
        return view('news');
    }
    public function newsDetail(){
        return view('newsDetail');
    }
    public function Networking(){
        return view('networking');
    }
    public function websiteDesign(){
        return view('webDesign');
    }
    public function softwareDevelopment(){
        return view('software');
    }
    public function digitalMarketing(){
        return view('digitalMarketing');
    }
}
