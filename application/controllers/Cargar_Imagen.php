<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargar_Imagen extends CI_Controller {

	public function index()
	{
		$data["titulo"] = "UNCuyo";
		$this->load->view('layouts/head',$data);
		$this->load->view('imagenes/index');
		$this->load->view('layouts/scripts');
	}

	public function proceso()
	{
		$this->load->view('imagenes/proceso');
	}

}
