<?php

namespace App\Models\Maps;

use Jenssegers\Mongodb\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Files extends Model
{
    protected $collection = 'files';

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'uuid', 'interation', 'name', 'filepath', 'type'
    ];

    public $visible = [
        'uuid','name', 'filepath', 'type'
    ];

    public static function getFile(){
        return Interations::firstorNew([
            'uuid' => Uuid::uuid1()->toString(),
            'interation' => null,
            'name' => null,
            'filepath' => null,
            'type' => null,
        ]);
    }

    public function interation()
    {
        return $this->belongsTo(Interations::class,'interation','uuid');
    }
}
