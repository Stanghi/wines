<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $wines = Wine::all();

        return view('home',compact('wines'));
    }
}
