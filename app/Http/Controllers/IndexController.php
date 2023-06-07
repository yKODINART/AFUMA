<?php

namespace App\Http\Controllers;

use App\Models\Galeries;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $galeries = Galeries::take(6)->get();
        return view('site.index', compact('galeries'));
    }
}
