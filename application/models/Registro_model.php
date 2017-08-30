<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
class Registro_model extends CI_Model {

	public function __construct(){
    	parent::__construct();
    	$this->load->database();
    	$this->load->library('session');
    }

	public function insert_user($data)
	{		
		$this->db->insert('unc_usuarios', $data);
		//$_SESSION['newsession']="yes";
		$this->session->set_userdata('newsession','yes');
	}

	public function update_entry()
	{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}
}