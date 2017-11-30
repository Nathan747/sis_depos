<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Donacion_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function select_user_info()
	{
		$this->db->where('email_user', $this->session->email);
		$sql = $this->db->get('unc_usuarios');
		$filas = $sql->num_rows();
		$json;
		if ($filas > 0) {
			foreach ($sql->result() as $row) {
				$json = $row->id_user;
			}
		}
		else {
			$json = -1;
		}
		return $json;
	}

	public function almacenar_dinero($data)
	{
		$sql = $this->db->get('unc_cantidad_dinero');
		$filas = $sql->num_rows();
		if ($filas == 0) {
			$this->db->insert('unc_cantidad_dinero', $data);
		}
		else {
			foreach ($sql->result() as $row) {
				$cantidad_dinero = $row->cantidad_dinero;
			}
			$data["cantidad_dinero"] += floatval($cantidad_dinero);

			$this->db->where('id_cantidad_dinero', 1);
			$this->db->update('unc_cantidad_dinero', $data);
		}

	}

	public function control_id_orden($id_orden)
	{
		$this->db->where('id_operacion_mp', $id_orden);
		$sql = $this->db->get('unc_transactions');
		$filas = $sql->num_rows();
		return $filas;
	}

	public function guardar_informacion_pago($datos)
	{
		$this->db->insert('unc_transactions', $datos);
	}

	public function guardar_informacion_pago_colaborador($datos)
	{
		$this->db->insert('unc_colaborador_donacion', $datos);
	}
}