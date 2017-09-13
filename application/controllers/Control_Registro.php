<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Registro extends CI_Controller {
	//$this->load->library('session');
	public function __construct(){
		parent::__construct();
		$this->load->model('Registro_model');
	}

	public function load_user_info()
	{	

		$data = $this->input->post();//Se puede reemplazar en esto

		$datos = array(
			"nombre_user" 		=> $data["nombre"],
			"apellido_user" 	=> $data["apellido"],
			"email_user" 		=> $data["email"],
			"telefono_user" 	=> $data["telefono"],
			"es_egresado_user"	=> $data["egresado"],
			"fecha_egreso_user" => $data["fecha_egresado"],
			"pass_user" 		=> $data["password"],
			"profesion_user"	=> $data["profesion"],
			"lat_user" 			=> $data["latitud"],
			"long_user" 		=> $data["longitud"],
			"jerarquia" 		=> 2
		);

		$this->Registro_model->insert_user($datos);
		
		echo json_encode($data);
	}
}