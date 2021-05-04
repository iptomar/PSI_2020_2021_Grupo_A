<?php

namespace App\Models\Maps;

use Jenssegers\Mongodb\Eloquent\Model;
use phpDocumentor\Reflection\Location;
use Ramsey\Uuid\Uuid;

class Locations extends Model
{
    protected $collection = 'locations';

    protected $primaryKey = 'uuid'; 

    public static function getLocation(){
        return Locations::firstorNew([
            'id' => Uuid::uuid1()->toString(),
            'lng' => null,
            'lat' => null,
        ]);
    }
}
