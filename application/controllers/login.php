<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller{
        public function index()
        {
            $this->load->view('paginas/head');
            $this->load->view("paginas/login/index.php");
        }
    }