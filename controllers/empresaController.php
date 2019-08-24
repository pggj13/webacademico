<?php

class empresaController extends Controller{
    
    public function index(){
        
        $dados = array();
        $this->loadTemplate('empresa', $dados);
    }
}
