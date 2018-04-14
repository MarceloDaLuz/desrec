<?php
    class Usuario_model extends CI_Model{
        /* Metodo para salvar usuario no banco */
        public function salvar($user){
            /* salva o usuario passado pelo paramentro $user*/
            $this->db->insert("usuario",$user);
        }

        /* Metodo para autenticar e retornar de acordo com o email e senha*/    
        public function autenticarEmailESenha($email,$password){
            /* usando email e senha como paramentro de busca */
            $this->db->where("email", $email);
            $this->db->where("senha",$password);
            /* pega a unica primeira respota */
            $user =$this->db->get("usuario")->row_array();
            /* retorna o usuario encontrado*/
            return $user;
        }

        public function buscarUsuario($usuario_objeto){
            $user = $this->db->get_where("usuario",array("id"=>$usuario_objeto))->row_array();
            return $user;
        }
    }