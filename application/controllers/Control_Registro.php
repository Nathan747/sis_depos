<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Registro extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('logica/control_registro');
	}

	public function load_user_info()
	{
		$data = array(
			"nombre" 	=> $this->input->post('nombre'),
			"apellido"	=> $this->input->post('apellido'),
			"email"		=> $this->input->post('email'),
			"usuario" 	=> $this->input->post('usuario'),
			"password"	=> $this->input->post('password'),
			"latitud"	=> $this->input->post('latitud'),
			"longitud"	=> $this->input->post('longitud')
		); 
		echo json_encode($data);
	}
}