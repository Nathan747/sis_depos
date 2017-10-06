<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function enviar_datos()
	{	
		
		$data = $this->input->post();//Se puede reemplazar en esto

		$datos = array(
			"email_user" 		=> $data["email"],
			"pass_user" 		=> $data["password"]
		);

		$retorno = $this->Login_model->control_user($datos);

		echo json_encode($retorno);
		
	}
}