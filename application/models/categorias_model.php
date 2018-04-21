<?php
    class Categorias_model extends CI_Model{
        /* metodo para buscar as categorias e exibir na pagina categorias --teste de busca no banco */
        public function buscarCategoria(){
            return $this->db->get("categorias")->result_array();
        }

        public function buscarCategoriaDropdown(){
            $dd = array();
            $categorias =  $this->db->get("categorias")->result_array();
            foreach ($categorias as $categoria ) {
                $dd[$categoria["id"]] = $categoria["nome"];
            }
            $dropdown = $dd;
            return $dropdown;
        }
    }