<?php

namespace App\Http\Controllers;

use App\Domains\Maps\Services\interactionsService;
use App\Models\Maps\Interations;
use App\Models\Maps\Locations;
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
        $locations = Locations::all();
        $arr = [];
        foreach ($locations as $loc){
            $arr[] = [
                'id' => $loc->uuid,
                'lat' => $loc->lat,
                'lng' => $loc->lng,
            ];
        }
        return response()->json($arr);
    }

    public function getInterations($id){
        $interations = Interations::where('location',$id)->select('uuid','name','title','created_at')->get();
        $arr = [];
        foreach ($interations as $int){
            $arr[] = [
                'uuid' => $int->uuid,
                'name' => $int->name,
                'title' => $int->title,
                'date' => $int->created_at->toDateString()
            ];
        }
        return response()->json($arr);
    }
}

