<?php

class cursosController extends Controller{
    
    public function index(){
        
        $dados = array();
        $this->loadTemplate('nossos_cursos', $dados);
    }
}

