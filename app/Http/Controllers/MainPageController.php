<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class MainPageController extends Controller
{

    public function sendDataToFrontEnd(){

        $blogs = Blog::query()->take(5)->get();;
        return view('index',compact('blogs'));
    }
}
