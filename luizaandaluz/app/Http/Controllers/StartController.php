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
            'name'=>'Camilo Diego Bechir Sauane',
            'website'=>['url'=>'https://www.instagram.com/diego_bs8/','name'=>'Instagram'],
            'image'=>'',
            'birthday'=>'1998-07-29 ',
            'desc'=>lang('group.camilo'),
            'number'=>'21085',
        ];
    }

    private function diogo(){
        return [
            'name'=>'Diogo Polidoro',
            'website'=>['url'=>'https://www.instagram.com/diogorpolidoro/','name'=>'Instagram'],
            'image'=>'',
            'birthday'=>'1997-11-23',
            'desc'=>lang('group.diogo'),
            'number'=>'20752',
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
            'name'=>'Samuel Leal Gomes Luis',
            'website'=>['url'=>'https://github.com/samueluis','name'=>'Git'],
            'image'=>'',
            'birthday'=>'1998-05-15',
            'desc'=>lang('group.samuel'),
            'number'=>'21461',
        ];
    }

    private function pedro(){
        return [
            'name'=>'Pedro Rafael Magalhães Gomes',
            'website'=>['url'=>'','name'=>''],
            'image'=>'',
            'birthday'=>'1998-10-29',
            'desc'=>lang('group.pedro'),
            'number'=>'21279',
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
