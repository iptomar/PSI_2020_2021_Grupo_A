<?php

namespace App\Models\Maps;

use Jenssegers\Mongodb\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Interations extends Model
{
    protected $collection = 'map_interation';

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'uuid', 'location','name','email','birthday','title','description','active'
    ];

    public $visible = [
        'uuid', 'location','name','email','birthday','title','description','active'
    ];

    public static function getInteration(){
        return Interations::firstorNew([
            'uuid' => Uuid::uuid1()->toString(),
            'location' => null,
            'name' => null,
            'email' => null,
            'birthday' => null,
            'title' => null,
            'description' => null,
            'active' => 0,
        ]);
    }

    public function locations()
    {
        return $this->belongsTo(Locations::class,'location','uuid');
    }

    public function files()
    {
        return $this->hasMany(Files::class,'uuid');
    }
}
