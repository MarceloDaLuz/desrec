<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Usuario extends CI_Controller{
        public function novo(){
            $user = array(
                "nome" =>$this->input->post("nome"),
                "email" =>$this->input->post("email"),
                "senha" => $this->input->post("senha"),
                "ENDERECO"=>$this->input->post("endereco"),
                "cpf"=>$this->input->post("cpf")
            );
            $this->load->database();
            $this->load->model("usuario_model");
            $this->usuario_model->salvar($user);
            $this->load->view("paginas/usuario/novo");
        }
    }