<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class interacoes extends Controller
{
    public function index()
    {
        return view('map.index');
    }
}
