<?php   
    class Coleta_model extends CI_Model{
        public function salvar($coleta){
            $this->db->insert("reg_coletas",$coleta);
        }
    }