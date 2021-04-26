<?php

namespace Database\Seeders;

use App\Models\Maps\Locations;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class testLocations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
            'uuid' => Uuid::uuid1()->toString(),
            'lat' => '39.21770262154889',
            'lng' => '-8.676055925493838',
            ],[
            'uuid' => Uuid::uuid1()->toString(),
            'lat' => '39.61694714744583',
            'lng' => '-8.651828181367089',
            ]
        ];

        foreach($locations as $l){
            Locations::updateOrCreate([
                'uuid' => $l['uuid'],
                'lat' => $l['lat'],
                'lng' => $l['lng']
            ]);
        }
    }
}
