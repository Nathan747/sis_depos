<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
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
}
