<?php
class Categorias extends CI_Controller{
        
    public function index(){
        $categorias = array();
        
        $papel = array("nome" => "Papel","descricao" => "Material feito de papel");

        $metal = array("nome" => "Metal","descricao" => "Material feito de Metal");

        array_push($categorias, $papel, $metal);

        $dados = array("categorias" =>  $categorias);

        $this->load->view("categorias/index.php",$dados);
    }
} 