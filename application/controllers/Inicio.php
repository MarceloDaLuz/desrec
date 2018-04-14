<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    class Inicio extends CI_Controller{
        /* METODO SIMPLES PARA EXIBIR PAGINA */
        public function index(){
            $this->load->view('paginas/head');
            $this->load->view('paginas/navbar');
            $this->load->view('paginas/inicio/index.php');
        }
    }