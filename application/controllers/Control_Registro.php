<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Registro extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Registro_model');
	}

	public function index()
	{
		$this->load->view('logica/control_registro');
	}

	public function load_user_info()
	{	
		/*$data = array(
			"nombre" 	=> $this->input->post('nombre'),
			"apellido"	=> $this->input->post('apellido'),
			"email"		=> $this->input->post('email'),
			"usuario" 	=> $this->input->post('usuario'),
			"password"	=> $this->input->post('password'),
			"latitud"	=> $this->input->post('latitud'),
			"longitud"	=> $this->input->post('longitud')
		);*/

		$data = $this->input->post();//Se puede reemplazar en esto

		$datos = array(
			"nombre_user" 		=> $data["nombre"],
			"apellido_user" 	=> $data["apellido"],
			"email_user" 		=> $data["email"],
			"usuario_user" 		=> $data["usuario"],
			"pass_user" 		=> $data["password"],
			"lat_user" 			=> $data["latitud"],
			"long_user" 		=> $data["longitud"],
			"fecha_creacion" 	=> time(),
			"jerarquia" 		=> 2
		);

		$this->Registro_model->insert_user($datos);
		
		echo json_encode($data);
	}
}