<?php

namespace App\Models\Maps;

use Jenssegers\Mongodb\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Interations extends Model
{
    protected $collection = 'map_interation';

    protected $primaryKey = 'uuid';

    protected $fillable = [
<<<<<<< HEAD
<<<<<<< HEAD
        'uuid', 'location','title','description'
    ];

    public $visible = [
        'uuid', 'location','title','description'
=======
        'uuid', 'location','attachment','name','email','birthday','title','description','active'
    ];

    public $visible = [
        'uuid', 'location','attachment','name','email','birthday','title','description','active'
>>>>>>> ef1ab97ecbb6d84a78012cb3a3168c81c1e49cab
=======
        'uuid', 'location','name','email','birthday','title','description','active'
    ];

    public $visible = [
        'uuid', 'location','name','email','birthday','title','description','active'
>>>>>>> 248af737bf2dbe572bb569aa9713feb980788195
    ];

    public static function getInteration(){
        return Interations::firstorNew([
            'uuid' => Uuid::uuid1()->toString(),
            'location' => null,
<<<<<<< HEAD
=======
            'name' => null,
            'email' => null,
            'birthday' => null,
>>>>>>> 248af737bf2dbe572bb569aa9713feb980788195
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
