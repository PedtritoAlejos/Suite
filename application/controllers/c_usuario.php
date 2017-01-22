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
         $this->load->view("cabecera");
        $this->load->view("v_menu_superior");
        $this->load->view("v_menu_items");
        $this->load->view("v_usuario", compact("nombres","tipos_componentes","tipos_servicios"));
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
}
