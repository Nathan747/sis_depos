<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_model extends CI_Model {

	public function __construct(){
    	parent::__construct();
    	$this->load->database();
    	$this->load->library('session');
    }

    public function select_transactions(){
		$sql=$this->db->get('unc_transactions');
		$filas = $sql->num_rows();
    	return $filas;
	}

	public function insert_data_transactions($datos){
		$this->db->where('email_user', $this->session->email);
		$this->db->update('unc_usuarios', $datos);
	}
}