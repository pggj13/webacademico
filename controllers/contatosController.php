<?php

class contatosController extends Controller{
    
    public function index(){
        
        $dados = array();
        $this->loadTemplate('contatos', $dados);
    }
}

