<?php
class Categorias extends CI_Controller{
        
    public function index(){
        
        $this->load->database();
        $this->load->model("categorias_model");
        $categorias = $this->categorias_model->buscarCategoria();
        $datas = array("categorias" =>  $categorias);

        $this->load->view('categorias/index.php',$datas);
    }
} 