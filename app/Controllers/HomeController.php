<?php

namespace Transportes\Controllers;

class HomeController extends Controller{
 
    public function index(){
        $dados = ['titulo' => '77 Transportes'];
        $this->view('inicial', $dados);
    }
}
