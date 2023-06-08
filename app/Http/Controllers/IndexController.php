<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Galeries;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $galeries = Galeries::take(6)->get();
        $blogs = Blogs::take(6)->get();
        return view('site.index', compact('galeries', 'blogs'));
    }
}
