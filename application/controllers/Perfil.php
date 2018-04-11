<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller{

    /* metodo para autenticar login, usando email e senha*/
    public function autenticar()
        {
            $this->load->model("usuario_model");

            /*pega as informações da pagina login */
                $email = $this->input->post("email");
            /*$password = md5($this->input->post("senha")); */
                $password = $this->input->post("senha");
            $user = $this->usuario_model->autenticarEmailESenha($email,$password);
            if($user){
                $this->session->set_userdata("usuario_logado",$user);
                $this->session->set_flashdata("status","Logado com sucesso!");
                redirect('/');
            }else{
                $this->session->set_flashdata("status","E-mail ou senha invalido!");
                redirect('/');
            }
            
        }

}