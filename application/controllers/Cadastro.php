<?php  defined('BASEPATH') OR exit('No direct script access allowed');    
class Cadastro extends CI_Controller{
    // METODO SIMPLES PARA EXIBIR A PAGINA
        public function index(){
            $this->load->view('paginas/head');
            $this->load->view('paginas/navbar');
            $this->load->view("paginas/cadastro/index.php");
        }
}