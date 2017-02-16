<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_plataforma
 *
 * @author Pedrito Alejos 
 */
class m_plataforma extends CI_Model {
  
    public function agregar_plataforma ($nombre,$cpu,$ram,$so,$ip,$id_cliente,$id_proposito,$id_servicio){
          $sql= "INSERT INTO plataforma(id_plataforma,nombre,cpu,ram,so,ip,id_cliente,id_proposito,id_servicio) VALUES(0,'".$nombre."','".$cpu."','".$ram."','".$so."','".$ip."','".$id_cliente."','".$id_proposito."','".$id_servicio."')";
        if ( $this->db->query($sql) ){
            return $this->db->insert_id(); // devuelve el id generado de la plataforma
        } else {
            return false;
        }
        
    }
    public function actualizar_plataforma (){
        
    }
    public function buscar_plataforma (){
        
    }
    public function eliminar_plataforma (){
        
    }
}
