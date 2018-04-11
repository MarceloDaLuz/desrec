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
                $this->session->set_flashdata("status-success","Logado com sucesso!");
                redirect("paginas/perfil/autenticado.php");
            }else{
                $this->session->set_flashdata("status-failed","E-mail ou senha invalido!");
                redirect('/');
            }
            
        }

    public function deslogar()
    {
        $this->session->unset_userdata("usuario_logado");
        redirect('/');
    }

}