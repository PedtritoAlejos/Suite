<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_usuario
 *
 * @author AdvisorIT
 */
class m_usuario  extends CI_Model{
    //put your code here
    
  public function __construct() {
		parent::__construct();
	}
        
  
	
	public function validacion_usuario($username,$password)// datos se cargan en la sesion
	{
		$this->db->where('correo',$username);
		$this->db->where('contrasenha',$password);
		$this->db->where('Activo',1);
		$query = $this->db->get('usuario');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			return null;
		}
	}
        
        public function get_usuarios(){
//            return $this->db->get("usuario")->result();
            
             $this->db->select("CONCAT(run_usuario,  '-', dv_run) as 'run_usuario' ,CONCAT(nombre,' ',apellido_paterno,' ',apellido_materno)
as 'nombre',correo,contrasenha,Activo,id_tipo_usuario");
            return $this->db->get("usuario")->result();
              
        }
}
