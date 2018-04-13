<?php 
     class Objeto_model extends CI_Model{
        /* Metodo para salvar objeto criado no banco */
        public function salvar($objeto){
            $this->db->insert("objeto",$objeto);
        }
        
     }