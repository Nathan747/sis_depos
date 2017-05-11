<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $template 	= array();
	public $data		= array();

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}


	// Permite renderizar la vista con un layout (Template)
	// @param String $layout el layout a aplicar
	public function layout($layout){
		$this->template["content"] = $this->load->view($this->content, $this->data, true);
		$this->template["header"] = $this->load->view("layouts/$layout/header", $this->data, true);
		$this->template["footer"] = $this->load->view("layouts/$layout/footer", $this->data, true);
		$this->load->view("layouts/$layout/main", $this->template);
	}
}
