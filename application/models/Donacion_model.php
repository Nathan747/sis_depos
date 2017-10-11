<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Donacion_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function select_user_info(){
		$this->db->where('email_user', $this->session->email);
		$sql=$this->db->get('unc_usuarios');
		$filas = $sql->num_rows();
		if ($filas>0){
			foreach ($sql->result() as $row){
				$json = $row->nombre_user;
			}
		}
		return $json;
	}
}