<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$data["titulo"] = "LOGIN";

		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('login');
		$this->load->view('layouts/scripts');
		$this->load->view('layouts/footer');
	}

	public function control()
	{
		$data = $this->input->post();//Se puede reemplazar en esto

		$datos = array(
			"email_user" => $data["email"]
		);

		$existe=$this->Login_model->existe_mail($datos);
		if($existe==1){
			$this->session->set_userdata("username",$data["nombre_completo"]);
			$this->session->set_userdata("email",$data["email"]);


		}
		echo json_encode($existe);
		
	}

	public function set_yes()
	{
		$this->session->set_userdata("newsession","yes");
	}

	public function set_no()
	{
		$this->session->set_userdata("newsession","no");
	}


}
