<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Markers_model extends CI_Model {

	public function select_markers(){
		$query = $this->db->get('unc_usuarios');
		$i=0;
		foreach ($query->result() as $row) 
		{
			$json[$i]["id_user"] = $row->id_user;
			$json[$i]["nombre_user"] = $row->nombre_user;
			$json[$i]["apellido_user"] = $row->apellido_user;
			$json[$i]["email_user"] = $row->email_user;
			$json[$i]["telefono_user"] = $row->telefono_user;
			$json[$i]["dni_user"] = $row->dni_user;
			$json[$i]["profesion_user"] = $row->profesion_user;
			$json[$i]["fecha_egreso_user"] = $row->fecha_egreso_user;
			$json[$i]["pass_user"] = $row->pass_user;
			$json[$i]["lat_user"] = $row->lat_user;
			$json[$i]["long_user"] = $row->long_user;
			$json[$i]["fecha_creacion"] = $row->fecha_creacion;
			$json[$i]["es_egresado_user"] = $row->es_egresado_user;
			$json[$i]["jerarquia"] = $row->jerarquia;
			$json[$i]["img"] = $row->img;
			$i++;
		}

		return $json;
	}
}