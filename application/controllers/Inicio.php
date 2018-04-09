<?php
    class Inicio extends CI_Controller{
        public function index(){
            $this->load->view('paginas/inicio/index.php');
        }
    }