<?php
    class Categorias_model extends CI_Model{
        public function buscarCategoria(){
            return $this->db->get("categorias")->result_array();
        }
    }