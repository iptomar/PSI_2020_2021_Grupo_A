<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        return view('welcome.index');
    }

    public function group(){
        $alunos = $this->getInfo();
        return view('group.index')->with('alunos',$alunos);
    }

    private function getInfo(){
        return [
            $this->andre(),
            $this->camilo(),
            $this->diogo(),
            $this->flavio(),
            $this->jessica(),
            $this->oscar(),
            $this->pedro(),
            $this->samuel(),
        ];
    }

    private function camilo(){
        return [
            'name'=>'',
            'website'=>['url'=>'','name'=>''],
            'image'=>'',
            'birthday'=>'',
            'desc'=>lang('group.camilo'),
            'number'=>'',
        ];
    }

    private function diogo(){
        return [
            'name'=>'',
            'website'=>['url'=>'','name'=>''],
            'image'=>'',
            'birthday'=>'',
            'desc'=>lang('group.diogo'),
            'number'=>'',
        ];
    }

    private function oscar(){
        return [
            'name'=>'Óscar Arcizet Campos',
            'website'=>['url'=>'https:\\cv-oscar.unicaos.eu','name'=>'Portfolio'],
            'image'=>'',
            'birthday'=>'1989-04-19',
            'desc'=>lang('group.oscar'),
            'number'=>'21997',
        ];
    }

    private function andre(){
        return [
            'name'=>'',
            'website'=>['url'=>'','name'=>''],
            'image'=>'',
            'birthday'=>'',
            'desc'=>lang('group.andre'),
            'number'=>'',
        ];
    }

    private function samuel(){
        return [
            'name'=>'',
            'website'=>['url'=>'','name'=>''],
            'image'=>'',
            'birthday'=>'',
            'desc'=>lang('group.samuel'),
            'number'=>'',
        ];
    }

    private function pedro(){
        return [
            'name'=>'',
            'website'=>['url'=>'','name'=>''],
            'image'=>'',
            'birthday'=>'',
            'desc'=>lang('group.pedro'),
            'number'=>'',
        ];
    }

    private function jessica(){
        return [
            'name'=>'Jéssica Ribeiro Maria',
            'website'=>['url'=>'','name'=>''],
            'image'=>'',
            'birthday'=>'1999-02-11',
            'desc'=>lang('group.jessica'),
            'number'=>'21074',
        ];
    }

    private function flavio(){
        return [
            'name'=>'',
            'website'=>['url'=>'','name'=>''],
            'image'=>'',
            'birthday'=>'',
            'desc'=>lang('group.flavio'),
            'number'=>'',
        ];
    }

    private function professor(){

    }
}
