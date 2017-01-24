<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_usuario
 *
 * @author pedrito
 */
class c_usuario extends CI_Controller {
    
    //put your code here
    public function _construct() {
        parent::_construct();
    }
    public function index_usuario(){
        $lista =$this->listar_tipos_usuarios();
        $this->load->view("cabecera");
        $this->load->view("v_menu_superior");
        $this->load->view("v_menu_items");
        $this->load->view("v_usuario", compact("lista"));
        $this->load->view("v_footer");
    }
    
//    public function get_usuarios(){
//        $this->load->model('m_usuarios');
//        $usuarios = $this->m_usuarios->get_users();
//        $data =array();
//        foreach ($usuarios as $user){
//            $data[] =array (
//                'run'=> $user->run_usuario,
//                'dv_run'=>$user->dv_run,
//                'nombre'=>$user->nombre,
//                'apellido_p'=>$user->apellido_paterno,
//                'apellido_m'=>$user->apellido_materno,
//                'correo'=>$user->correo,
//                'clave'=>$user->contrasenha,
//                'activo'=>$user->Activo,
//                'id_tipo_usuario'=>$user->id_tipo_usuario
//                );
//        }
//        $this->output
//                ->set_content_type('application/json')
//                ->set_output(json_encode(array()));
//     }
    public function get_usuarios_todos(){
        $this->load->model("m_usuario");
         echo   json_encode($this->m_usuario->get_usuarios());
        
    }
    public function listar_tipos_usuarios(){
       $this->load->model("m_usuario");
      return $this->m_usuario->mostrar_tipos_usuarios();  
        
    }
    public function eliminar_usuario(){
         
        if($this->input->is_ajax_request())
        {
            $run = $this->input->post("id");
            $this->load->model("m_usuario");
            $this->m_usuario->eliminar_usuario($run);
            echo json_encode(array("status" => "success"));
        }
    
    }
    public function agregar_usuario(){
       if($this->input->is_ajax_requst() )
       {
         $this->form_validation->set_rules('run', 'Run', 'required|number');
         $this->form_validation->set_rules('dv', 'Dv', 'required|callback_formato_dv');
         $this->form_validation->set_rules('nombre', 'Nombre', 'required');
         $this->form_validation->set_rules('paterno', 'Paterno', 'required');
         $this->form_validation->set_rules('materno', 'Materno', 'required');
         $this->form_validation->set_rules('correo', 'Correo', 'required|email');
         $this->form_validation->set_rules('clave', 'Clave', 'required|callback_formato_clave');
         $this->form_validation->set_rules('tipo', 'Tipo', 'required|number');
         
          $this->form_validation->set_message('required', 'El campo {field} es requerido');
          $this->form_validation->set_message('number', 'El campo {field} debe ser numerico');
          $this->form_validation->set_message('email', 'El campo {field} no tiene el formato correcto');
          $this->form_validation->set_message('formato_dv', 'El campo {field} no tiene el formato correcto');
          $this->form_validation->set_message('formato_clave', 'El campo {field} no tiene el formato correcto debe ser solo numeros y letras');
          
          if($this->form_validation->run()) /**/
          {
              
           
                if( $this->agregar_usuario($this->input->post("run"),$this->input->post("dv"),
                   $this->input->post("nombre"),$this->input->post("paterno"),$this->input->post("materno"),
                   $this->input->post("correo"),$this->input->post("clave"),$this->input->post("tipo")) )
                {
                    
                }
                    
                
          }else{
              echo json_encode(array("status"=>"error"));
          }
       }
    }
    
    public function formato_dv($param) {
          $permitidos = "0123456789kK";
        for ($i = 0; $i < strlen($param); $i++) {
            if (strpos($permitidos, substr($param, $i, 1)) === false) {
                //no es válido; 
                return false;
            }
        }
        //si estoy aqui es que todos los caracteres son validos 
        return true;
    }
    public function formato_clave($param) {
          $permitidos = "0123456789.abcdefghijklmnopqrstuvwxyzABCDEFGHIJKJLMNOPQRSTUVWYXZ";
        for ($i = 0; $i < strlen($param); $i++) {
            if (strpos($permitidos, substr($param, $i, 1)) === false) {
                //no es válido; 
                return false;
            }
        }
        //si estoy aqui es que todos los caracteres son validos 
        return true;
    }
    
    public function agregar_usuario($run,$dv_run,$nombre,$paterno,$materno,$correo,$clave,$tipo){
        $this->load->model("m_usuario");
        $flag = $this->m_usuario->agregar_usuario($run,$dv_run,$nombre,$paterno,$materno,$correo,$clave,$tipo); 
        //retorna el true o false dependiendo si se agrego 
        return $flag;
    }
        
    
}
    