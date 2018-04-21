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
        $this->load->model("categorias_model");
        $c=$this->categorias_model->buscarCategoriaDropdown();
        $datas['categorias'] = $c;
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/Objeto/cadastro.php',$datas);        
    }

    public function mostrar($id){
        /* Exibir pagina para mostrar o objeto, detalhadamente ------------ qualquer usuario pode usar acessar! */
        /* Leitura do model objeto */
        $this->load->model("objeto_model");
        /* Busca do objeto pelo id QUE É PASSADO PELO GET-URL */
        $user = $this->session->userdata("usuario_logado");
             //$id= $this->input->get("id");
        $objeto = $this->objeto_model->buscarObjetoPorID($id);
        //$objeto = $this->criando_um_objeto();
        $dados = array("objeto"=>$objeto);
        //$dados["objeto"] = $objeto;
        //$dados["usuario"] = $usuarios;
        $this->load->model("categorias_model");
        $this->load->model("usuario_model");
        $dados["usuario"] = $this->usuario_model->buscarUsuarios();
        $dados["categoria"] = $this->categorias_model->buscarCategoria();

        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/Objeto/mostra.php',$dados);

    }

    private function criando_um_objeto(){
        //primeiro ler todos os models
        $this->load->model("objeto_model");
        $this->load->model("usuario_model");
        $this->load->model("categorias_model");

        //busca os objetos :
        $objetos = $this->objeto_model->buscarObjeto();
        //objeto rato 
        $objeto_rato = array();
        $categoria = array();
        $usuario = array();
        
        foreach ($objetos as $o) {
            
            $objeto_rato = array(
                'ID' => $o["ID"],
                'NOME' =>$o["NOME"],
                'DESCRICAO' =>$o["DESCRICAO"],
                'VALOR' => $o["VALOR"],
                'DATAPOST'=>$o["DATAPOST"],
                'categorias_id' => $categoria,
                'usuario_id' => $usuario
            ); 
        }
        
        $clones_exibicao = $objeto_rato;
        return $clones_exibicao; 
    }

    /* ------------------------------------------------------------------------------------------------------------------------------------- */
    
    /* SALVAR OBJETO NOVO NO BANCO */
    public function novo(){
        /* pega o usuario logado */
        $user = $this->session->userdata("usuario_logado");
        
        /* Data - now*/
        $d = dataConvert(date("d/m/Y"));

        /* Cria um objeto para salvar no banco */
        $objeto = array(
            "NOME"=> $this->input->post("nome"),
            "DESCRICAO"=> $this->input->post("descricao"),
            "VALOR"=>$this->input->post("valor"),
            "ESTADO"=> '1',
            "DATAPOST"=> $d,
            "usuario_id"=> $user["ID"],
            "categorias_id"=> $this->input->post("categoria")
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
        /*
            cria um "cole" do objeto alterando o usuario_id e o estado
            $novo_objeto = array(
                "NOME"=>$objeto["NOME"],
                "DESCRICAO"=>$objeto["DESCRICAO"],
                "VALOR"=>$objeto["VALOR"],
                "ESTADO"=>'0',
                "DATAPOST"=>$d,
                "usuario_id"=>$user["ID"]
            );
        */
        //criar um item para a tabela historico
        $item_do_historico = array(
                    "objeto_id"=>$objeto["ID"],
                    "coletador"=> $user["ID"],
                    "fornecedor"=>$objeto["usuario_id"]
        );
        //Salva uma copia do objeto no banco
            //$this->objeto_model->salvar($novo_objeto);
        //insere dados na tabela historico 
        $this->coleta_model->salvar($item_do_historico);
        //Altera a coluna ESTADO e USUARIO_ID ta tabela objetos
        $this->objeto_model->objetoColetado($id,$user["ID"]);
        //Envia uma mensagem para o usuario ficar ciente de que sua coleta foi supimpa
        $this->session->set_flashdata("success","Objeto coletado com sucesso!");
        //Redireciona para a pagina de perfil
        redirect("Perfil/autenticado");

    }
}