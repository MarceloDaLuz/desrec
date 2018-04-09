<?php
    class Usuario_model extends CI_Model{
        public function salvar($user){
            $this->db->insert("usuario",$user);
        }

        public function autenticarEmailESenha($email,$password){
            $this->db->where("email", $email);
            $this->db->where("senha",$password);
            $this->db->get("usuario")->row_array();
            return $user;
        }
    }