<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller{

    public function autenticar()
        {
            $this->load->model("usuario_model");

            /*pega as informações da pagina login */
                $email = $this->input->post("email");
                /*$password = md5($this->input->post("senha")); */
                $password = $this->input->post("senha");
            $user = $this->usuario_model->autenticarEmailESenha($email,$password);
            if($user){
                $dados = array("mensagem"=>"logado com sucesso!");
            }else{
                $dados = array("mensagem"=> "email ou senha invalida");
            }
            $this->load->view("paginas/perfil/autenticado",$dados);
        }
}