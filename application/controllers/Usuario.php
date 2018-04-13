<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    class Usuario extends CI_Controller{
        public function novo(){
            /*fazer verificação se email ja existe */
            /*fazer verficação se cpf ja existe */
            /*transformar a senha em md5 */
            $user = array(
                "nome" =>$this->input->post("nome"),
                "email" =>$this->input->post("email"),
                "senha" => $this->input->post("senha"),
                "ENDERECO"=>$this->input->post("endereco"),
                "cpf"=>$this->input->post("cpf")
            );
            /*$this->load->database();*/
            $this->load->model("usuario_model");
            $this->usuario_model->salvar($user);
            $new_user = $this->usuario_model->autenticarEmailESenha($user['email'],$user['senha']);
            $this->session->set_userdata("usuario_logado",$new_user);
            $this->load->view('paginas/head');
            $this->load->view('paginas/navbar');
            $this->load->view("paginas/usuario/novo");
        }

        
    }