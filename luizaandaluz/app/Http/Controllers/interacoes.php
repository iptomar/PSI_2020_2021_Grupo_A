<?php

namespace App\Http\Controllers;

use App\Models\Maps\Locations;
use Illuminate\Http\Request;

class interacoes extends Controller
{
    public function index()
    {
        return view('map.index');
    }

    public function getLocations(){
        return response()->json(Locations::all());
    }
}

