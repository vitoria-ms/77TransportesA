<?php

namespace Transportes\Controllers;

use Transportes\Core\Controller;

class LoginController extends Controller{
 
    public function login(){
        $this->view('login',['pagina' => 'Página de Login']);
    }
    public function criarConta(){
        $this->view('conta');
              
    }
}
