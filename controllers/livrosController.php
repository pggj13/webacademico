<?php

class livrosController extends Controller{
    
    public function index(){
        
        $dados = array();
        $this->loadTemplate('nossos_livros', $dados);
    }
}
