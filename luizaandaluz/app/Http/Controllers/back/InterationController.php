<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Maps\Files;
use App\Models\Maps\Interations;
use Carbon\Carbon;
use Illuminate\Http\Request;
use stdClass;
use File;

class InterationController extends Controller
{
    public function index(){
        $interations = Interations::all()->sortBy('active');

        return view('bko_interations.index')->with('interations',$interations);
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
        $interation = Interations::where('uuid',$id)->select('uuid','location','email','name','birthday','title','description')->first();

        $int = [
            'uuid' => $interation->uuid,
            'name' => $interation->name,
            'title' => $interation->title,
            'email' => $interation->email,
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

        return view('bko_interations.details')->with('interation',$int)->with('files',$files);
    }

    public function approve($id){
        $interation = Interations::where('uuid',$id)->first();

        $interation->active = 1;
        $interation->save();

        return redirect()->route('backoffice.interation.list');
    }

    public function destroy($id){
        $interation = Interations::where('uuid',$id)->first();

        $files = Files::where('interation',$id)->get();

        $path = public_path().DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.$id;
        dd($interation,$files,$path);
        array_map('unlink', glob("$path/*"));

        rmdir($path);
        $interation->delete();
        return redirect()->route('backoffice.interation.list');
    }
}
