<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ModController extends Controller
{
    public function index(){
        $users = User::where('role','mod')->get();

        return view('users.index')->with('users',$users);
    }
}
