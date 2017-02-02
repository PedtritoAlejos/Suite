<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_cliente
 *
 * @author Pedrito Alejos 
 */
class m_cliente extends CI_Model{
    //put your code here
    
    public function agregar_cliente ($nombre ,$descrip_client,$fecha_inicio,$fecha_final){
        
         $sql= "INSERT INTO cliente(id_cliente, nombre,descripcion_cliente fecha_inicio,fecha_final) VALUES(0,'". $nombre."','".$descrip_client."' ,'". $fecha_inicio ."','".$fecha_final."')";
        if ( $this->db->query($sql) ){
            return $this->db->insert_id(); // devuelve el id generado del cliente
        } else {
            return false;
        }
       
    }
    
    public function inser_cliente($id_cliente,$Nombre,$descrip,$fecha_i,$fecha_f,$activo) {
        $data = array(
            'id_cliente' => $id_cliente,
            'Nombre' => $Nombre,
              'descripcion_cliente ' => $descrip,
            'fecha_inicio'=> $fecha_i,
            'fecha_final' => $fecha_f,
            'activo'=>$activo
        ); 
        return $this->db->insert('cliente', $data);
    }
    
    
    public function get_cli()
	{
                 $this->db->where('activo',1);
		$query = $this->db->get('cliente');
		if($query->num_rows() > 0)
		{

			return $query->result();

		}

	}

	//eliminamos usuarios
	public function delete_cli($id)
	{

		
        $data = array(

			'activo' => '0'
        ); 

		$this->db->where('id_cliente',$id);
		$this->db->update('cliente',$data);
		

	}

	//editamos usuarios
	public function edit_cli($id_cliente,$Nombre,$descrip,$fecha_i,$fecha_f)
	{

		$fecha = date('Y-m-d');

		$data = array(

			'nombre' => $Nombre,
              'descripcion_cliente ' => $descrip,
            'fecha_inicio'=> $fecha_i,
            'fecha_final' => $fecha_f
        ); 

		$this->db->where('id_cliente',$id_cliente);
		$this->db->update('cliente',$data);

	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function get_cliente(){
                //$this->db->where("Activo", self::STATUS_ACTIVO);
           return $this->db->get("cliente")->result();
      }
public function eliminar_cliente($id_cliente){
             $this->db->where('id_cliente' , $id_cliente);
		return $this->db->delete('cliente');
        }
       
       
        public function actualizar_usuario($id_cliente,$Nombre,$descrip,$fecha_i,$fecha_f){
           $data = array(
                            
                            'Nombre' => $Nombre,
              'descripcion_cliente ' => $descrip,
            'fecha_inicio'=> $fecha_i,
            'fecha_final' => $fecha_f
        ); 
                         $this->db->where('id_cliente', $id_cliente);

           return $this->db->update('cliente', $data); 
        }
        
	
	
    public function actualizar_cliente(){
        
    }
    public function buscar_cliente(){
        
    }
   
    public function mostrar_cliente(){
        return $this->db->get('cliente');
    }
}
