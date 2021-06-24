<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModForm;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use Ramsey\Uuid\Uuid;

class ModController extends Controller
{
    public function index(){
        $users = User::where('role','mod')->get();

        return view('users.index')->with('users',$users);
    }

    public function create(){

        return view('users.create');
    }

    public function store(Request $request){
        $input = $request->input();
        $message = ['bg-success'=>['title'=>lang('fullstack.success'),'text'=>lang('backoffice.modAddSucess')]];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'iso_lang' => 'required|in:pt,en'
        ]);

        if ($validator->fails()) {
            $message = ['bg-danger'=>['title'=>lang('fullstack.error'),'text'=>lang('backoffice.existEmail')]];
            Session::flash('message', $message);
            return view('users.index')->with('users',User::where('role','mod')->get());
        }

        try{
            User::create([
                'uuid'=>Uuid::uuid1()->toString(),
                'iso_lang'=>$input['iso_lang'],
                'name'=>$input['name'],
                'email'=>$input['email'],
                'role'=>'mod',
                'password'=>bcrypt('12345678')
            ]);
        }catch(Exception $e){
            $message = ['bg-danger'=>['title'=>lang('fullstack.error'),'text'=>lang('frontoffice.modAddFail')]];
        }
        Session::flash('message', $message);
        return view('users.index')->with('users',User::where('role','mod')->get());
    }

    public function edit($id){
        $mod = User::where('uuid',$id)->where('role','mod')->first();

        return view('users.edit')->with('mod',$mod);
    }

    public function update(Request $request){

        $input = $request->input();
        $user = User::where('uuid',$input['uuid'])->first();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$input['uuid'].',uuid',
            'iso_lang' => 'required|in:pt,en'
        ]);
        if ($validator->fails()) {
            $message = ['bg-danger'=>['title'=>lang('fullstack.error'),'text'=>lang('backoffice.existEmail')]];
            Session::flash('message', $message);
            return view('users.index')->with('users',User::where('role','mod')->get());
        }
        try {
            User::updateorCreate(
                [
                    'uuid'=>$user->uuid
                ],
                [
                'iso_lang'=>$input['iso_lang'],
                'name'=>$input['name'],
                'email'=>$input['email'],
                'role'=>'mod',
            ]);
        } catch (Exception $th) {
            Session::flash('message', ['bg-success'=>['title'=>lang('fullstack.success'),'text'=>lang('backoffice.modEditFail')]]);
            return view('users.index')->with('users',User::where('role','mod')->get());
        }


        Session::flash('message', ['bg-success'=>['title'=>lang('fullstack.success'),'text'=>lang('backoffice.modEditSuccess')]]);
        return view('users.index')->with('users',User::where('role','mod')->get());
    }

    public function destroy($id){
        User::where('uuid',$id)->where('role','mod')->first()->delete();

        return redirect()->route('backoffice.user.list');
    }
}
