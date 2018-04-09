<?php
    class Cadastro extends CI_Controller{
        public function index(){
            $this->load->helper("url");
            $this->load->helper("form");
            $this->load->view("paginas/cadastro/index.php");
        }
    }