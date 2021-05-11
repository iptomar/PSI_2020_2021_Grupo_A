<?php

namespace App\Http\Controllers;

use App\Domains\Maps\Services\interactionsService;
use App\Models\Maps\Interations;
use Illuminate\Http\Request;


class InterationsController extends Controller
{
    private $service;
    public function __construct(){
        $this->service = new interactionsService();
    }

    public function index()
    {
        return view('map.index');
    }

    public function store(Request $request)
    {
        $message = $this->service->save($request->input());

        return response()->json($message);
    }

    public function getLocations(){
        $interations = Interations::all();
        $arr = [];
        foreach ($interations as $int){
            $arr[] = [
                'title' => $int->title,
                'lat' => $int->locations()->first()->lat,
                'lng' => $int->locations()->first()->lng,
            ];
        }
        return response()->json($arr);
    }
}
