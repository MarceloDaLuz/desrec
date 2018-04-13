<?php  defined('BASEPATH') OR exit('No direct script access allowed');    

    class teste extends CI_Controller{

         public function index(){
            $data['head'] = $this->load->view('paginas/head');
            $data['header'] = $this->load->view('paginas/navbar');
            $data['footer'] = $this->load->view('paginas/footer');
            $this->load->view("paginas/teste/teste.php",$data);
         }
    }