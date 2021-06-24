<?php

namespace App\Domains\Maps\Services;

use App\Models\Maps\Files;
use App\Models\Maps\Interations;
use App\Models\Maps\Locations;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class interactionsService
{
    public function save($input,$files){
        $session = DB::getMongoClient()->startSession();
        try {
            $session->startTransaction();
            $location = Locations::where('lat',$input['lat'])->where('lng',$input['lng'])->first();

            if (null == $location)
                $location = $this->createLocation($input);
            $interation = $this->createInteraction($input,$location);
            $this->associateFiles($interation,$input,$files);
            $session->commitTransaction();
        } catch(Exception $e) {
            $session->abortTransaction();
            return ['bg-danger'=>['title'=>lang('fullstack.error'),'text'=>lang('frontoffice.interation-fail')]];
        }
        return ['bg-success'=>['title'=>lang('fullstack.success'),'text'=>lang('frontoffice.interation-success')]];
    }

    private function createLocation($input){
        $location = Locations::getLocation();
        $location->lat = $input['lat'];
        $location->lng = $input['lng'];
        $location->save();
        return $location;
    }

    private function createInteraction($input,$location){
        $interaction = Interations::getInteration();
        $interaction->location = $location->uuid;
        $interaction->name = $input['name'];
        $interaction->email = $input['email'];
        $interaction->birthday = $input['date'];
        $interaction->title = $input['title'];
        $interaction->description = $input['description'];
        $interaction->save();

        return $interaction;
    }

    private function associateFiles($interation,$input,$files){
        if(isset($input['url']) && isset($input['urltitle'])){
            foreach($input['url'] as $index=>$url){
                $this->createFile($interation->uuid,$input['urltitle'][$index],$url,'l');
            }
        }

        $path = public_path().'/files/'.$interation->uuid;

        if(!File::exists($path)){
            File::makeDirectory($path);
        }

        if(isset($files['files'])){
            foreach($files['files'] as $index=>$file){
                $ext = $file->extension();
                $search = '.'.$ext;
                $filename = str_replace($search,'',$input['filename'][$index]).$search;
                $filepath = $file->storeAs($interation->uuid,$filename,'uploadPath');
                $this->createFile($interation->uuid,$input['filename'][$index],$filepath,'f');
            }
        }

        if(isset($files['images'])){
            foreach($files['images'] as $index=>$image){
                $ext = $image->extension();
                $search = '.'.$ext;
                $filename = str_replace($search,'',$input['imagename'][$index]).$search;
                $filepath = $image->storeAs($interation->uuid,$filename,'uploadPath');
                $this->createFile($interation->uuid,$input['imagename'][$index],$filepath,'i');
            }
        }

        if(isset($files['videos'])){
            foreach($files['videos'] as $index=>$video){
                $ext = $video->extension();
                $search = '.'.$ext;
                $filename = str_replace($search,'',$input['videoname'][$index]).$search;
                $filepath = $video->storeAs($interation->uuid,$filename,'uploadPath');
                $this->createFile($interation->uuid,$input['videoname'][$index],$filepath,'v');
            }
        }
    }

    private function createFile($interation,$title,$filepath,$type){
        $file = Files::getFile();
        $file->interation = $interation;
        $file->name = $title;
        $file->filepath = $filepath;
        $file->type = $type;
        $file->save();
    }
}
