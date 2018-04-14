<?php 
     class Objeto_model extends CI_Model{
        /* Metodo para salvar objeto criado no banco */
        public function salvar($objeto){
            $this->db->insert("objeto",$objeto);
        }
        
        public function buscarObjeto(){
            return $this->db->get("objeto")->result_array();
        }

        public function buscarObjetoPorID($id){
            return $this->db->get_where("objeto",array("id"=>$id))->row_array();
        }

        public function buscarMeuObjeto($obj_id, $user_id){
            return $this->db->get_where("objeto",array("ID"=>$obj_id,"usuario_id"=>$user_id))->result_array();
        }
     }