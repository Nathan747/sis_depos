<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Perfil_model');
	}

	public function obtener_datos()
	{
		$datos = array(
			"email_user" => $this->session->email
		);
		return $this->Perfil_model->control_user($datos);
	}

	public function obtener_datos_json()
	{
		$datos = array(
			"email_user" => $this->session->email
		);
		$json = $this->Perfil_model->control_user($datos);
		$json = json_encode($json);
		echo $json;
	}

	public function actualizar_perfil()
	{
		$data = $this->input->post();

		$datos = array(
			"nombre_user" 		=> $data["nombre"],
			"apellido_user" 	=> $data["apellido"],
			"telefono_user" 	=> $data["telefono"],
			"dni_user" 			=> $data["dni"],
			"profesion_user" 	=> $data["profesion"],
			"biografia_user" 	=> $data["biografia"],
			"fecha_egreso_user" => $data["fecha"],
			"pass_user" 		=> $data["pass"],
			"es_egresado_user"	=> $data["egresado"],
			"facultad_user"		=> $data["facultad"],
			"carrera_user"		=> $data["carrera"],
			"long_user"			=> $data["longitud"],
			"lat_user"			=> $data["latitud"]
		);

		$this->Perfil_model->actualizar($datos);
		$json["username"] = $datos["nombre_user"]." ".$datos["apellido_user"];
		$json["profesion"] = $datos["profesion_user"];
		echo json_encode($json);
	}

}