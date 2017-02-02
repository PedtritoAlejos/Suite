<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Alejandro
 */
class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_usuario');
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->database('default');
    }

    public function index() {
        switch ($this->session->userdata('id_tipo_usuario')) {
            case '':
                $data['token'] = $this->token();
                $data['titulo'] = 'Login con roles de usuario en codeigniter';
                $this->load->view('v_login2', $data);
                break;
            case '1':
                redirect(base_url() . 'index.php/l_admin');
                break;
            case '2':
                redirect(base_url() . 'index.php/l_consultor');
                break;
            case '3':
                redirect(base_url() . 'index.php/l_operador');
                break;
            default:
                $data['titulo'] = 'Login con roles de usuario en codeigniter';
                $this->load->view('v_login2', $data);
                break;
        }
    }

    public function token() {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    public function new_user() {
        if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) {
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|max_length[150]|xss_clean');

            //lanzamos mensajes de error si es que los hay
            $this->form_validation->set_message('required', 'El %s es requerido');
            $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
            if ($this->form_validation->run() == FALSE) {
                $this->index();
            } else {
                $username = $this->input->post('username');
                $password = sha1($this->input->post('password'));
                $check_user = $this->m_usuario->login_user($username, $password);
                if ($check_user == TRUE) {
                    $data = array(
                        'is_logued_in' => TRUE,
                        'id_usuario' => $check_user->run_usuario,
                        'nombre' => $check_user->nombre,
                        'apellido_pater' => $check_user->apellido_paterno,
                        'id_tipo_usuario' => $check_user->id_tipo_usuario,
                        'correo' => $check_user->correo
                    );
                    $this->session->set_userdata($data);
                    $this->index();
                }
            }
        } else {
            redirect(base_url() . 'index.php/login');
        }
    }

    public function logout_ci() {
        $this->session->sess_destroy();
        $this->index();
    }

}
