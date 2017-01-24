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
     const STATUS_DELETED = 0; //constante con el valor de eliminado
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
                $this->db->where("Activo",1);
           return $this->db->get("usuario")->result();
//            
//             $this->db->select("CONCAT(run_usuario,  '-', dv_run) as 'run_usuario' ,CONCAT(nombre,' ',apellido_paterno,' ',apellido_materno)
//as 'nombre',correo,contrasenha,Activo,id_tipo_usuario");
//            return $this->db->get("usuario")->result();
              
        }
        public function eliminar_usuario($run){
             $this->db->set("Activo", self::STATUS_DELETED)->where("run_usuario", $run)->update("usuario");
        }
        public function mostrar_tipos_usuarios(){
            return $this->db->get("tipo_usuario")->result();
           
        }
}
