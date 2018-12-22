<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $var = [1, 2, 3];


        dump($var);

        //return view('index/index', compact('var'));
    }
}
