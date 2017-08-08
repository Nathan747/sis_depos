<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Markers extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Markers_model');
	}

	public function load()
	{
		$usuarios = $this->Markers_model->select_markers();
		echo json_encode($usuarios);
	}

}
