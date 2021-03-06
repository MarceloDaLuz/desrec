<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Descarte extends CI_Controller{
    /* METODO PARA EXIBIR A PAGINA*/
    public function index(){
        //LEITURA DO MODEL
        $this->load->model("objeto_model");
        $user= $this->session->userdata("usuario_logado");
        //FAZ UMA BUSCA NO BANCO DOS OBJETOS CADASTRADOS
        $objetos = $this->objeto_model->buscarObjetoDisponivel();
        $meus_objetos = $this->objeto_model->buscarMeuObjeto($user["ID"]);
        //OS OBJETOS FORAM ALOCADOS NA VARIVEL E SÃO ENVIADOS PARA A PAGINA, PARA QUE POSSAM SER EXIBIDOS
        $datas= array("objetos"=> $objetos,"meus_objetos"=>$meus_objetos,"usuario"=>$user);
        $this->load->view('paginas/head');
        $this->load->view('paginas/navbar');
        $this->load->view('paginas/descarte/index.php',$datas);
    }
}