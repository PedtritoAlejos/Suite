<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_sistema
 *
 * @author Pedrito Alejos 
 */
class m_sistema extends CI_Model{
    //put your code here
    
    function agregar_sistema ($nombre,$descripcion,$id_plataforma){
        
          $sql= "INSERT INTO sistema(id_sistema, nombre, descripcion,id_plataforma) VALUES(0,'". $nombre."', '".$descripcion."','".$id_plataforma."')";
        if ( $this->db->query($sql) ){
            return $this->db->insert_id(); // devuelve el id generado del cliente
        } else {
            return false;
        }
    }
}
