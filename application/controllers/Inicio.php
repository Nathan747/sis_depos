<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		//$this->session->sess_destroy();
		$data["titulo"] = "UNCuyo";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('start_body');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('registro');
		$this->load->view('login');
		$this->load->view('donar');
		$this->load->view('end_body');
		$this->load->view('layouts/scripts');
		$this->load->view('layouts/footer');
	}

	public function donacion()
	{
		$data["titulo"] = "UNCuyo";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('start_body');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('donacion');
		$this->load->view('end_body');
		$this->load->view('layouts/scripts');
		$this->load->view('layouts/footer');
	}

	public function en_proceso()
	{
		$data["titulo"] = "UNCuyo";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('start_body');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('proceso');
		$this->load->view('end_body');
		$this->load->view('layouts/scripts');
		$this->load->view('layouts/footer');
	}

	public function back()
	{
		$data["titulo"] = "Admin UNCuyo";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('backend/header');
		$this->load->view('backend/aside');
		$this->load->view('backend/contenido');
		$this->load->view('backend/scripts');
	}

/*cierre de sesión*/
	public function logout()
	{
		session_unset();
		//$_SESSION['FBID'] = NULL;
		//$_SESSION['FULLNAME'] = NULL;
		//$_SESSION['EMAIL'] =  NULL;
		$this->session->set_userdata("EMAIL",NULL);
		$this->session->set_userdata("FULLNAME",NULL);
		$this->session->set_userdata("FBID",NULL);
		$this->session->set_userdata("newsession","no");
		//$_SESSION['usuario'] =  NULL;
		$json["eliminado"]=1;
		echo json_encode($json);
	}
}
