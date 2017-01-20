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
}
