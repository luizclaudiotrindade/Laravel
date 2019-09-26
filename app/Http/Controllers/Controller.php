<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homePage(){
        $titulo = "Laravel com Claudinho";
        return view('welcome',[
            'title' => $titulo
        ]);
    }
    
    public function cadastro(){
        echo('tela de cadastro');
    }

    public function login(){
        echo('tela de login');
    }
}
