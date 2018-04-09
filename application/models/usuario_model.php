<?php
    class Usuario_model extends CI_Model{
        public function salvar($user){
            $this->db->insert("usuario",$user);
        }
    }