<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        return view('welcome.index');
    }

    public function group(){
        return view('group.index');
    }
}
