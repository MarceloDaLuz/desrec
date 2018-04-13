<?php
    class Categorias_model extends CI_Model{
        /* metodo para buscar as categorias e exibir na pagina categorias --teste de busca no banco */
        public function buscarCategoria(){
            return $this->db->get("categorias")->result_array();
        }
    }