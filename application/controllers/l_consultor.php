<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of l_consultor
 *
 * @author Alejandro
 */
class l_consultor extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}
	
	public function index()
	{
		if($this->session->userdata('id_tipo_usuario') == FALSE || $this->session->userdata('id_tipo_usuario') == '3')
		{
			redirect(base_url().'index.php/login');
		}
		$data['titulo'] = 'Bienvenido de nuevo ' .$this->session->userdata('nombre_t_u');
		$this->load->view("cabecera");
        $this->load->view("v_menu_superior");
        $this->load->view("v_inicio");
        $this->load->view("v_formulario", compact("nombres","tipos_componentes","data","tipos_servicios"));
	}
}
