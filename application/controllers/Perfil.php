<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Perfil_model');
	}

	public function index()
	{
		
		$datos = array(
			"email_user" => $this->session->email

		);
		$profile=$this->Perfil_model->control_user($datos);

		
		$data["titulo"] = "PERFIL";

		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('perfil',$profile);
		$this->load->view('layouts/scripts');
		$this->load->view('layouts/footer');
	}

	public function editar()
	{
		$data["titulo"] = "EDITAR PERFIL";

		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('editarperfil');
		$this->load->view('layouts/scripts');
		$this->load->view('layouts/footer');
	}

}