<?php

namespace App\Models\Maps;

use Jenssegers\Mongodb\Eloquent\Model;
use phpDocumentor\Reflection\Location;
use Ramsey\Uuid\Uuid;

class Locations extends Model
{
    protected $collection = 'locations';

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'uuid', 'lat','lng'
    ];

    protected $visible = [
        'uuid', 'lat','lng'
    ];

    public static function getLocation(){
        return Locations::firstorNew([
            'uuid' => Uuid::uuid1()->toString(),
            'lng' => null,
            'lat' => null,
        ]);
    }

    public function interations()
    {
        return $this->belongsTo(Interations::class,'uuid','location');
    }
}
