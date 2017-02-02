<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_componente
 *
 * @author Pedrito Alejos 
 */
class m_componente extends CI_Model {
    
    //put your code here

      public function mostrar_componente(){
        return $this->db->get('componente')->result();
    }
      public function mostrar_tipo_componente(){
        return $this->db->get('tipo_componente')->result();
    }
    
    public function ingresar_componente($nombre_componente,$descripcion,$id_tipo_componente){
          $sql= "INSERT INTO componente(id_componente, nombre_componente, descripcion,id_tipo_componente) VALUES(0,'".$nombre_componente."', '".$descripcion ."','".$id_tipo_componente."')";
        if ( $this->db->query($sql) ){
            return $this->db->insert_id(); // devuelve el id generado del cliente
        } else {
            return false;
        }
    }
}
