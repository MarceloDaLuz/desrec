<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Objeto extends CI_Controller{

    public function index(){
        /* Exibir a pagina*/
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/Objeto/index.php');
    }

    public function cadastro(){
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/Objeto/cadastro.php');
    }

    
}