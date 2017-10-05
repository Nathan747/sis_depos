<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Perfil_model');
	}

	public function index()
	{
		$profile=$this->obtener_datos();
		
		$data["titulo"] = "PERFIL";
		$class["clase"] = "profile";

		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('layouts/header');
		$this->load->view('perfil',$profile);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts',$profile);
		$this->load->view('end_body');
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
		//print_r($json);
		echo $json;
	}

	public function editar()
	{


		$datos = array(
			"email_user" => $this->session->email

		);
		$profile=$this->Perfil_model->control_user($datos);

		$data["titulo"] = "EDITAR PERFIL";
		$class["clase"] = "editprofile";

		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('layouts/header');
		$this->load->view('editarperfil',$profile);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
	}

}