<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandigController extends Controller
{
    public function index()
    {
        return view('landingpage');
    }
}
