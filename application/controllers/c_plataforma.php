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
         $this->load->view("cabecera");
        $this->load->view("v_menu_superior");
        $this->load->view("v_menu_items");
        $this->load->view("v_plataforma");
        $this->load->view("v_footer");
    }
    
    public function mostrar_tipo(){
        
    }
}
