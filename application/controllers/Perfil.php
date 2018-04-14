<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller{
    /* metodo para autenticar login, usando email e senha*/
    public function autenticado(){
        /* CRIAMOS UM ARRAY, ONDE SERA SETADO COM O USUARIO LOGADO, ASSIM PODEREMOS EXIBIR OS DADOS DO USUARIO NA PAGINA DE PERFIL */
        $u = $this->session->userdata("usuario_logado");
        $this->load->model("objeto_model");
        $objetos = $this->objeto_model->buscarMeuObjeto($u["ID"]);
        $data = array("usuario" => $u,"objetos"=>$objetos);
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('/paginas/Perfil/meu_perfil.php',$data);
    }
    /* METODO PARA VALIDAR UM CADASTRO*/
    public function autenticar()
        {
            $this->load->model("usuario_model");

            /*pega as informações da pagina login */
                $email = $this->input->post("email");
            /*$password = md5($this->input->post("senha")); */
                $password = $this->input->post("senha");
            $user = $this->usuario_model->autenticarEmailESenha($email,$password);
            /* VERIFICA SE O USUARIO NÃO ESTA VAZIO */
            if($user){
                /* CRIA-SE UMA SESSION E UM FLASHDATA, E REDIRECIONA PARA PAGINA */
                $this->session->set_userdata("usuario_logado",$user);
                $this->session->set_flashdata("status-success","Logado com sucesso!");
                redirect('Perfil/autenticado',$user);
            }else{
                /* AQUI O USER POSSUI ALGUM ERRO ENTÃO REDIRECIONA PARA PAGINA INICIAL.. EXIBINDO A MENSAGEM */
                /* (proxima modificação sera fazer com que a pagina apenas seja recarregada exibindo a mensagem de erro, assim o usuario não tera que entrar e sair da pagina) */
                $this->session->set_flashdata("status-failed","E-mail ou senha invalido!");
                redirect('/');
            }
            
        }
    
    /* METODO PARA DESLOGAR*/ 
    public function deslogar()
    {
        $this->session->unset_userdata("usuario_logado");
        redirect('/');
    }
    
}