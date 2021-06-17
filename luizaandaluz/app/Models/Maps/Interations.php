<?php

namespace App\Models\Maps;

use Jenssegers\Mongodb\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Interations extends Model
{
    protected $collection = 'map_interation';

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'uuid', 'location','title','description'
    ];

    public $visible = [
        'uuid', 'location','title','description'
    ];

    public static function getInteration(){
        return Interations::firstorNew([
            'uuid' => Uuid::uuid1()->toString(),
            'location' => null,
            'title' => null,
            'description' => null,
        ]);
    }

    public function locations()
    {
        return $this->belongsTo(Locations::class,'location','uuid');
    }
}
