<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{

    public function cv()
    {
        return view('cv');
    }
    public function biography()
    {
        return view('biography');
    }
}