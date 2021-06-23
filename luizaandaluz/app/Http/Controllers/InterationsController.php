<?php

namespace App\Http\Controllers;

use App\Domains\Maps\Services\interactionsService;
use App\Models\Maps\Files;
use App\Models\Maps\Interations;
use App\Models\Maps\Locations;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use stdClass;

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
        $message = $this->service->save($request->input(),$request->file());
        Session::flash('message', $message);

        return redirect()->back();
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
        $interations = Interations::where('location',$id)->select('uuid','location','name','title','created_at')->get();
        $arr = [];
        foreach ($interations as $int){
            $arr[] = [
                'uuid' => route('map.detail',$int->uuid),
                'name' => $int->name,
                'title' => $int->title,
                'date' => $int->created_at->toDateString(),
                'lat' => $int->locations()->first()->lat,
                'lng' => $int->locations()->first()->lng
            ];
        }
        return response()->json($arr);
    }

    public function getInteration($id){
        $interation = Interations::where('uuid',$id)->select('uuid','location','name','birthday','title','description')->first();

        $int = [
            'uuid' => $interation->uuid,
            'name' => $interation->name,
            'title' => $interation->title,
            'description' => $interation->description,
            'age' => Carbon::parse($interation->birthday)->age,
        ];

        $filesdata = Files::where('interation',$interation->uuid)->get();
        $files = new stdClass();
        $files->f = [];
        $files->i = [];
        $files->l = [];
        $files->v = [];
        $matches = [];
        foreach($filesdata as $fd){
            switch ($fd->type) {
                case 'f':
                    $files->f[] = [
                        'name'=> $fd->name,
                        'filepath'=> $fd->filepath
                    ];
                    break;
                case 'i':
                    $files->i[] = [
                        'name'=> $fd->name,
                        'filepath'=> $fd->filepath
                    ];
                    break;
                case 'v':
                    $files->v[] = [
                        'name'=> $fd->name,
                        'filepath'=> $fd->filepath
                    ];
                    break;

                default:
                preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $fd->filepath, $matches);
                    $files->l[] = [
                        'name'=> $fd->name,
                        'url'=>$matches[0],
                        'filepath'=> $matches[1]

                    ];
                    break;
            }
        }

        return view('map.details')->with('interation',$int)->with('files',$files);
    }


}

