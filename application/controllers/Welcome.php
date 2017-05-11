<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		$this->data = array(
			"titulo" => "UNC",
		);
		$this->content = "welcome/index";
		$this->layout("common");
	}
}
