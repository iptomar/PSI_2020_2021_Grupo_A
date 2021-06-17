<?php

namespace App\Domains\Maps\Services;

use App\Models\Maps\Interations;
use App\Models\Maps\Locations;
use Exception;
use Illuminate\Support\Facades\DB;


class interactionsService
{
    public function save($input){
        $session = DB::getMongoClient()->startSession();
        $session->startTransaction();
        try {
            $location = $this->createLocation($input);
            //$location = Locations::where('lat',$input['lat'])->where('lng',$input['lng'])->first();
            $this->createInteraction($input,$location);
            $session->commitTransaction();
        } catch(Exception $e) {
            $session->abortTransaction();
            return ['bg-danger'=>['title'=>'Error','text'=>'The interaction was not created']];
        }
        return ['bg-success'=>['title'=>'Success','text'=>'The interaction was created with success']];
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
        $interaction->title = $input['title'];
        $interaction->description = $input['description'];
        $interaction->save();
    }
}
