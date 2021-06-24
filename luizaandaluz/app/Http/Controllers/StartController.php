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
            $this->professor(),
        ];
    }

    private function camilo(){
        return [
            'name'=>'Camilo Diego Bechir Sauane',
            'website'=>['url'=>'https://europa.eu/europass/eportfolio/api/eprofile/shared-profile/4d724066-2295-43c1-9896-9ade6efaaafb?view=html','name'=>'Curriculum Vitae'],
            'image'=>asset('imagem/Alunos/camilo.jpg'),
            'birthday'=>'1998-07-29 ',
            'desc'=>lang('group.camilo'),
            'number'=>'21085',
        ];
    }

    private function diogo(){
        return [
            'name'=>'Diogo Polidoro',
            'website'=>['url'=>'https://www.instagram.com/diogorpolidoro/','name'=>'Instagram'],
            'image'=>asset('imagem/Alunos/diogo.jpeg'),
            'birthday'=>'1997-11-23',
            'desc'=>lang('group.diogo'),
            'number'=>'20752',
        ];
    }

    private function oscar(){
        return [
            'name'=>'Óscar Arcizet Campos',
            'website'=>['url'=>'https:\\cv-oscar.unicaos.eu','name'=>'Portfolio'],
            'image'=>asset('imagem/Alunos/oscar.jpg'),
            'birthday'=>'1989-04-19',
            'desc'=>lang('group.oscar'),
            'number'=>'21997',
        ];
    }

    private function andre(){
        return [
            'name'=>'André José Gonçalves Ramos',
            'website'=>['url'=>'','name'=>''],
            'image'=>asset('imagem/Alunos/andre.jpeg'),
            'birthday'=>'1999-10-15',
            'desc'=>lang('group.andre'),
            'number'=>'20710',
        ];
    }

    private function samuel(){
        return [
            'name'=>'Samuel Leal Gomes Luis',
            'website'=>['url'=>'https://github.com/samueluis','name'=>'Git'],
            'image'=>asset('imagem/Alunos/nofoto.png'),
            'birthday'=>'1998-05-15',
            'desc'=>lang('group.samuel'),
            'number'=>'21461',
        ];
    }

    private function pedro(){
        return [
            'name'=>'Pedro Rafael Magalhães Gomes',
            'website'=>['url'=>'','name'=>''],
            'image'=>asset('imagem/Alunos/pedro.jpeg'),
            'birthday'=>'1998-10-29',
            'desc'=>lang('group.pedro'),
            'number'=>'21279',
        ];
    }

    private function jessica(){
        return [
            'name'=>'Jéssica Ribeiro Maria',
            'website'=>['url'=>'','name'=>''],
            'image'=>asset('imagem/Alunos/jessica.jpg'),
            'birthday'=>'1999-02-11',
            'desc'=>lang('group.jessica'),
            'number'=>'21074',
        ];
    }

    private function flavio(){
        return [
            'name'=>'Flavio Oliveira',
            'website'=>['url'=>'','name'=>''],
            'image'=>asset('imagem/Alunos/flavio.jpg'),
            'birthday'=>'1997-05-13',
            'desc'=>lang('group.flavio'),
            'number'=>'21425',
        ];
    }

    private function professor(){
        return [
            'name'=> 'Engenheiro Paulo A. G. Santos',
            'website'=>['url'=>'https://www.linkedin.com/in/pauloagsantos','name'=>'Linkedin'],
            'image'=>asset('imagem/Alunos/professor.jpg'),
            'birthday'=>'',
            'desc'=>lang('group.professor'),
            'number'=>'',
        ];
    }
}
