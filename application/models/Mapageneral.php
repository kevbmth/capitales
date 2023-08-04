<?php
class Mapageneral extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodos(){
            $listadoGeneal=
            $this->db->get("capital_efkq");
            if ($listadoGeneal->num_rows()
                >0){
                    return $listadoGeneal->result();
                }
                return false;
        }
    }
