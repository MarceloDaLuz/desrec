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

    public function mostrar($id){
        /* Exibir pagina para mostrar o objeto, detalhadamente ------------ qualquer usuario pode usar acessar! */
        /* Leitura do model objeto */
        $this->load->model("objeto_model");
        /* Busca do objeto pelo id QUE É PASSADO PELO GET-URL */
        $user = $this->session->userdata("usuario_logado");
        //$id= $this->input->get("id");
        $objeto = $this->objeto_model->buscarObjetoPorID($id);
        $dados = array("objeto"=>$objeto);
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/Objeto/mostra.php',$dados);

    }
    /* SALVAR OBJETO NOVO NO BANCO */
    public function novo(){
        /* pega o usuario logado */
        $user = $this->session->userdata("usuario_logado");
        
        /* Data - now*/
        $d = dataConvert(date("d/m/Y H:i:s"));

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

    /* CRIA UM OBJETO NO PERFIL DO USUARIO E ALTERA O ESTADO DO OBJETO */
    //pega o id do objeto
    public function coletar($id){  
        //leitura do model
        $this->load->model("objeto_model");

        //leitura do coleta model
        $this->load->model("coleta_model");
        //envia o id do objeto e retorna em uma variavel
        $objeto = $this->objeto_model->buscarObjetoPorID($id);
        //converte a data para o formato mysql
        $d = dataConvert(date("d/m/Y"));
        //pega o usuario logado
        $user = $this->session->userdata("usuario_logado");
        $novo_objeto = array(
                    "objeto_id" =>$objeto["ID"],
                    //"DESCRICAO" =>$objeto["DESCRICAO"],
                    //"VALOR"=> $objeto["VALOR"],
                    //"ESTADO"=> '0',
                    //"DATAPOST"=>$d,
                    "usuario_id"=> $user["ID"]
        );
        //$this->bjeto_model->salvar($novo_objeto);
        $this->coleta_model->salvar($novo_objeto);
        $this->objeto_model->objetoColetado($id);
        $this->session->set_flashdata("success","Objeto coletado com sucesso!");
        redirect("Perfil/autenticado");

    }

    /* METODO PARA BUSCAR O PRODUTO COM NOME DESEJADO */
    public function buscar(){
        /* metodo estara alocado no botão buscar da barra de navegação(principalmente) */
        
    }

    /* METODO PARA BUSCAR OS OBJETOS DO USUARIO LOGADO */
    public function meuObjeto(){
        /* O metodo deve buscar por objeto usuario_id  igual ao id_do_usuario logado*/
    }
}