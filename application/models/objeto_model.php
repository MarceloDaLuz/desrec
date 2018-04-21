<?php 
     class Objeto_model extends CI_Model{
        /* Metodo para salvar objeto criado no banco */
        public function salvar($objeto){
            $this->db->insert("objeto",$objeto);
        }
        public function objetoColetado($objeto_id, $usuario_id){ 
            $dado= array('ESTADO' =>'0',"usuario_id"=>$usuario_id);
            $this->db->where("ID", $objeto_id);
            $this->db->update("objeto",$dado);
        }
        public function buscarObjeto(){
            return $this->db->get("objeto")->result_array();
        }

        public function buscarObjetoDisponivel(){
            return $this->db->get_where("objeto",array("ESTADO"=>'1'))->result_array();
        }
        public function buscarObjetoPorID($id){
            return $this->db->get_where("objeto",array("id"=>$id))->row_array();
        }

        public function buscarMeuObjeto($user_id){
            return $this->db->get_where("objeto",array("usuario_id"=>$user_id))->result_array();
        }
     }