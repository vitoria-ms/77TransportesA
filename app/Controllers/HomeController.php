<?php

namespace Transportes\Controllers;

use Transportes\Core\Controller;

class HomeController extends Controller{
 
    public function index(){
        $dados = ['titulo' => '77 Transportes'];
        $this->view('inicial', $dados);
    }
}
