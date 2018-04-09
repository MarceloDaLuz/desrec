<?php  defined('BASEPATH') OR exit('No direct script access allowed');class Categorias extends CI_Controller{
        
    public function index(){

        /*$this->load->database();*/
        $this->load->model("categorias_model");
        $categorias = $this->categorias_model->buscarCategoria();
        $datas = array("categorias" =>  $categorias);
        $this->load->helper("url");
        $this->load->view('paginas/categorias/index.php',$datas);
    }
} 