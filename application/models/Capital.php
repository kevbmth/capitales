<?php

    class Capital extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("capital_efkq", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoCapitales=
            $this->db->get("capital_efkq");

            if($listadoCapitales
                ->num_rows()>0){//Si hay datos
                    return $listadoCapitales->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($id_efkq){
            $this->db->where("id_efkq",$id_efkq);
            return $this->db->delete("capital_efkq"); 
        }

    }//Cierre de la clase
?>
