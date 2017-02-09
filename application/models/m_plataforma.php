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
  
    const STATUS_DELETED = 0; //constante con el valor de eliminado
  const STATUS_ACTIVO = 1; //constante con el valor de Usuario activo
     
     
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
    
    public function eliminar_plataforma (){
        
    }
    public function listar_plataforma(){
       
        $this->db->select("plataforma.id_plataforma as 'Codigo',plataforma.nombre  as 'Nombre' ,plataforma.ip as 'Ip' ,plataforma.cpu as 'Cpu',servicio.nombre as 'Servicio'"
        . ",plataforma.ram as 'Ram',plataforma.so as 'So' ,cliente.nombre as 'Cliente',proposito.nombre as 'Proposito'");
        $this->db->from('plataforma');
        $this->db->join('cliente', 'plataforma.id_cliente = cliente.id_cliente');
        $this->db->join('proposito', 'plataforma.id_proposito=proposito.id_proposito');
        $this->db->join('servicio', 'plataforma.id_servicio=servicio.id_servicio');
        $this->db->where('plataforma.activo',self::STATUS_ACTIVO);

        return $this->db->get()->result();
    }
    
    public function listar_cliente(){
        return $this->db->get('cliente')->result();
    }
    //
    public function listar_tp_servicio(){
        $this->db->select('id_tipo_servicio,nombre');
       $this->db->from('tipo_servicio');
       
        return $this->db->get()->result();
    }
}
