<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Objeto extends CI_Controller{

    public function index(){
        /* Exibir a pagina publica*/
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/Objeto/index.php');
    }

    public function cadastro(){
        /* Exibir pagina para cadastro -------apenas usuarios logados podem acessar esta paginas! */
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/Objeto/cadastro.php');
    }

    /* SALVAR OBJETO NO BANCO */
    public function novo(){
        /* pega o usuario logado */
        $user = $this->session->userdata("usuario_logado");
        
        /* Data - now*/
        $d = date("d/m/Y H:i:s");

        /* Cria um objeto para salvar no banco */
        $objeto = array(
            "NOME"=> $this->input->post("nome"),
            "DESCRICAO"=> $this->input->post("descricao"),
            "VALOR"=>$this->input->post("valor"),
            "ESTADO"=> '1',
            "DATAPOST"=> $d,
            "usuario_id"=> $user["ID"]
        );
        /*Leitura do model */
        $this->load->model("objeto_model");
        /* Chamada do metodo para salvar no banco */
        $this->objeto_model->salvar($objeto);
        /* Envia um aviso para o cliente confirmando que a criação do objeto foi feita */
        $this->session->set_flashdata("upload-success","Seu objeto foi cadastrado com sucesso!");
        /* redireciona para o perfil*/
        redirect('Perfil/autenticado');
    }
}