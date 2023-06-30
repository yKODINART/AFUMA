<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Galeries;
use App\Models\Headers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $galeries = Galeries::take(6)->get();
        $blogs = Blogs::take(6)->get();
        $headers = Headers::all();
        return view('site.index', compact('galeries', 'blogs', 'headers'));
    }
}
