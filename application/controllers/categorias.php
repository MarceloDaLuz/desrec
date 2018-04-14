<?php  defined('BASEPATH') OR exit('No direct script access allowed');
class Categorias extends CI_Controller{
    /* METODO SIMPLES PARA EXIBIR PAGINA */
    public function index(){

        /*$this->load->database();*/
        //LEITURA DO MODEL
        $this->load->model("categorias_model");
        //BUSCA UMA CATEGORIA
        $categorias = $this->categorias_model->buscarCategoria();
        //O RETORNO É ALOCADO NA VARIAVEL E ENVIA PARA A PAGINA PARA QUE POSSA SER EXIBIDO
        $datas = array("categorias" =>  $categorias);
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/categorias/index.php',$datas);
    }
} 