<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $wines = Wine::paginate(20);

        return view('home',compact('wines'));
    }

    public function detail($slug){
        $wine = Wine::where('slug', $slug)->first();
        return view('detail', compact('wine'));
    }
}
