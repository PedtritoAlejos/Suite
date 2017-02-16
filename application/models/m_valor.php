<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_valor
 *
 * @author Pedrito Alejos 
 */
class m_valor  extends CI_Model{
    //put your code here
    public function agregar_valor($resultado,$fecha,$id_componente,$id_sistema,$id_tipo_muestra,$run_autor){
          $sql= "INSERT INTO valor(id_valor, resultado,fecha,id_componente,id_sistema,id_tipo_muestra,run_autor) "
                  . "VALUES(0,'".$resultado."', '".$fecha."','".$id_componente."','".$id_sistema."','".$id_tipo_muestra."','".$run_autor."')";
        if ( $this->db->query($sql) ){
            return $this->db->insert_id(); // devuelve el id generado del cliente
        } else {
            return false;
        }
    }
}
