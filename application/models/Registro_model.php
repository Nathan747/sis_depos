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
		$this->session->set_userdata('newsession','yes');
		$nombre_completo = $data["nombre_user"]." ".$data["apellido_user"];
		$this->session->set_userdata('username',$nombre_completo);
	}

	public function update_entry()
	{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}

	public function existe($data)
	{
		$sql=$this->db->where($data)->get('unc_usuarios');	
		$filas = $sql->num_rows();
		if ($filas>0){
			$exist = 1;
		}else{
			$exist = 0;
		}
		return $exist;
	}

	public function bring_mails()
	{
		$sql=$this->db->get('unc_usuarios');
		$i=0;
		foreach ($sql->result() as $row) 
		{
			$json[$i]["email_user"] = $row->email_user;
			$i++;
		}	
		return $json;
	}
}