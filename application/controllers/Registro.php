<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data["titulo"] = "REGISTRO";

		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('registro');
		$this->load->view('layouts/scripts');
		$this->load->view('layouts/footer');
	}
}
