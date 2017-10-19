<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Perfil_model");
	}

	public function index($payment=0, $status=0)
	{
		$datos = array(
			"email_user" => $this->session->email
		);
		$profile=$this->Perfil_model->control_user($datos);

		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('loader/start_preload');
		$this->load->view('layouts/header');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('perfil',$profile);
		$this->load->view('modal');

		if (isset($_SESSION['newsession'])) {
			if ($_SESSION['newsession'] != "yes"){
				$this->load->view('registro');
			}
		} else{
			$this->load->view('registro');
		}
		if($payment!=0){
			$this->load->view('respuesta_status');
		}
		$this->load->view('login');
		$this->load->view('donar');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
	}
}
