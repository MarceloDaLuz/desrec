<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    class Usuario extends CI_Controller{
        /* METODO PARA CADASTRAR UM NOVO USUARIO NO SISTEMA */
        public function novo(){
            /*fazer verificação se email ja existe */
            /*fazer verficação se cpf ja existe */
            /*transformar a senha em md5 */
            /* CRIA UM ARRAY COM AS INFORMAÇÕES VINDAS DO FORMULARIO POR METODO POST */
            $user = array(
                "nome" =>$this->input->post("nome"),
                "email" =>$this->input->post("email"),
                "senha" => $this->input->post("senha"),
                "ENDERECO"=>$this->input->post("endereco"),
                "cpf"=>$this->input->post("cpf")
            );
            /*$this->load->database();*/
            /* LEITURA DO MODEL */
            $this->load->model("usuario_model");
            /* ENVIA O ARRAY POR PARAMENTRO PARA METODO DE SALVAR NO BANCO */
            $this->usuario_model->salvar($user);
            /* APOS A INSERÇÃO FAZ UM BUSCA PARA AUTENTICAR O USUARIO, ENVIANDO COMO PARAMETRO OS DADOS RECEM CHEGADOS */
            /* CRIA-SE TB UM NOVO ARRAY QUE SERA ENVIADO NA SESSION COM OS DADOS BUSCA */
            $new_user = $this->usuario_model->autenticarEmailESenha($user['email'],$user['senha']);
            /* AQUI É SETADO A SESSION COM O NOVO ARRAY */
            $this->session->set_userdata("usuario_logado",$new_user);
            /* LEITURA PARA VIEW */
            $this->load->view('paginas/head');
            $this->load->view('paginas/navbar');
            $this->load->view("paginas/usuario/novo");
        }

        
    }