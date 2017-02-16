<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_componente
 *
 * @author Alejandro
 */
class c_componente extends CI_Controller {

    public function _construct() {
        parent::_construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
    }

    public function index() {
        if($this->session->userdata('id_tipo_usuario') == FALSE)
		{
			redirect(base_url().'index.php/login');
		}else{
                    $this->load->view("cabecera");
        $this->load->view("v_menu_superior");
        $this->load->view("v_inicio");
        $this->load->view('v_componente');
                }
        
    }

    public function agre_comp(){
        echo 'Agregar componente';
    }
}
