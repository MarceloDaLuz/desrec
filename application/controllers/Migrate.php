<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller{
    public function index(){
        //leitura da biblioteca para usa-la
        $this->load->library("migration");
        //retorna 
        $s = $this->migration->current();
        if($s){
            echo 'migrado';
        }else{
            show_error($this->migration->error_string());
        }
    }
}