<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Descarte extends CI_Controller{
    public function index(){
        $this->load->view('paginas/head');
        $this->load->view('paginas/descarte/index.php');
    }
}