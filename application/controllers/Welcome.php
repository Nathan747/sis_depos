<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data["titulo"] = "UNC";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('layouts/main');
		$this->load->view('layouts/scripts');
		$this->load->view('layouts/footer');
	}
}
