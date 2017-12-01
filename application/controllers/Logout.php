<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	
	public function logout()
	{
		session_unset();
		$this->session->set_userdata("EMAIL", NULL);
		$this->session->set_userdata("FULLNAME", NULL);
		$this->session->set_userdata("FBID", NULL);
		$this->session->unset_userdata("newsession");
		$this->session->unset_userdata("email");
		$this->session->unset_userdata("jerarquia");
		$this->session->unset_userdata("id_colaborador");
		$json["eliminado"] = 1;
		echo json_encode($json);
	}
}