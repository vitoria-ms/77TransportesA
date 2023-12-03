<?php

namespace Transportes\Controllers;

class ErroController{
 
    public function erro($tipo){
        
    switch($tipo){
        case "404":
            $this->view('404');
            break;
        case "controller":
            $this->view('erro', ['msg' => 'Controller não existe']);
            break;
        case "metodo":
            $this->view('erro' ['msg' => 'O método não existe no controlador.']);
    
    }
    }
}
