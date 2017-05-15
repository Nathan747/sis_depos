<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data["titulo"] = "UNC";
		$this->load->view('layouts/common/head',$data);
		$this->load->view('layouts/common/style');
		$this->load->view('layouts/common/header');
		$this->load->view('layouts/common/main');
		$this->load->view('layouts/common/scripts');
		$this->load->view('layouts/common/footer');
	}
}
