<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_plataforma
 *
 * @author pedrito
 */
class c_plataforma extends CI_Controller{
    //put your code here
     public function _construct() {
         parent::_construct();
    }
    public function index(){
        $lista=$this->listar_cliente();
        $lista_ts=$this->mostrar_ts();
        $this->load->view("cabecera");
        $this->load->view("v_menu_superior");
        $this->load->view("v_menu_items");
        $this->load->view("v_plataforma", compact("lista","lista_ts"));
        $this->load->view("v_footer");
    }
   
    public function mostrar_ts(){
        $this->load->model("m_plataforma");
       return $this->m_plataforma->listar_tp_servicio(); 
    }
    public function lis_com(){
        $this->load->model("m_plataforma");
     echo json_encode( $this->m_plataforma->listar_plataforma());
    }

    public function listar_cliente(){
         $this->load->model("m_plataforma");
        return $this->m_plataforma->listar_cliente(); 
    }
}
