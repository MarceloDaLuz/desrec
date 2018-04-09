<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller{
        public function index()
        {
            $this->load->helper(array("url"),("form"));

            $this->load->view("paginas/login/index.php");
        }

        public function autenticar(){
            $this->load->model("usuario_model");

            $email = $this->input->post("email");
            /*$password = md5($this->input->post("senha")); */
            $password = $this->input->post("senha");
            $user = $this->load->usuario_model->autenticarEmailESenha($email,$password);
            if($user){
                $dados = array("mensagem"=>"logado com sucesso!");
            }else{
                $dados = array("mensagem"=> "email ou senha invalida");
            }
            $this->load->view("paginas/login/autenticado",$dados);
        }
    }