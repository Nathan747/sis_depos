<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');

class Cargar_model extends CI_Model {

	public function __construct(){
    	parent::__construct();
    	$this->load->database();
    	$this->load->library('session');
    }

	public function insert_image($datos){
		$this->db->where('email_user', $this->session->email);
		//$this->db->where('email_user', $_SESSION['email']);
		$this->db->update('unc_usuarios', $datos);
	}
}