<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function links()
    {
        return view('links');
    }

    // public function add(){
    //     return view('add');
    // }
}
