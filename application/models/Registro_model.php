<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model {
	public $nombre;
	public $apellido;
	public $email;
	public $usuario;
	public $user;
	public $password;
	public $latitud;
	public $longitud;

	public function __construct(){
    	parent::__construct();
    	$this->load->database();
    }

	public function insert_user($data)
	{		
		$this->db->insert('unc_usuarios', $data);
	}

	public function update_entry()
	{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}
}