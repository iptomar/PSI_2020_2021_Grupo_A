<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class superAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('permission:create-role',['name'=>'superadmin']);
        Artisan::call('permission:create-role',['name'=>'mod']);
        User::create([
            'uuid'=> Uuid::uuid1()->toString(),
            'iso_lang'=>'pt',
            'role'=>'superadmin',
            'name' => 'Fund. Luiza Andaluz',
            'email'=>'la@unicaos.eu',
            'password' => Hash::make('adjcpfso'),
        ]);
    }
}
