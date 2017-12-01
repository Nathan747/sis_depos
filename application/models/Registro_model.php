<?php 
defined('BASEPATH') or exit('No direct script access allowed');
//$this->load->library('session');
class Registro_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function insert_user($data)
	{
		$this->db->insert('unc_usuarios', $data);
		$this->session->set_userdata('newsession', 'yes');
		$nombre_completo = $data["nombre_user"] . " " . $data["apellido_user"];
		$this->session->set_userdata('username', $nombre_completo);
		$this->session->set_userdata('email', $data["email_user"]);
		$this->session->set_userdata('jerarquia', $data["jerarquia"]);
		$this->session->set_userdata('id_colaborador', $data["id_asociado"]);
		$sql = $this->db->get('unc_usuarios');
		foreach ($sql->result() as $row) {
			$id = $row->id_user;
		}
		$this->session->set_userdata('id', $id);
	}

	public function update_entry()
	{
		$this->title = $_POST['title'];
		$this->content = $_POST['content'];
		$this->date = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}
}