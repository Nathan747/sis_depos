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
		$sql2=$this->db->get('unc_usuarios');

		$filas = $sql->num_rows();
		$filas2 = $sql2->num_rows();

		if($filas2>0){
			$x=0;
			foreach ($sql2->result() as $row){
				$arreglo[$x]["id_user"] = $row->id_user;
				$arreglo[$x]["nombre_user"] = $row->nombre_user;
				$arreglo[$x]["apellido_user"] = $row->apellido_user;
				$arreglo[$x]["email_user"] = $row->email_user;
				$arreglo[$x]["telefono_user"] = $row->telefono_user;
				$arreglo[$x]["dni_user"] = $row->dni_user;
				$x++;
			}
		}

		if($filas>0){
			$i=0;
			foreach ($sql->result() as $row){
				$json[$i]["id_usuario"] = $row->id_usuario;
				$json[$i]["id_operacion_mp"] = $row->id_operacion_mp;
				$json[$i]["tipo_dinero"] = $row->tipo_dinero;
				$json[$i]["fecha_creada"] = $row->fecha_creada;
				$json[$i]["status"] = $row->status;
				$json[$i]["monto_transaction"] = $row->monto_transaction;
				$json[$i]["neto_recibido"] = $row->neto_recibido;
				for($j=0;$j<$x;$j++){
					if( $json[$i]["id_usuario"] == $arreglo[$j]["id_user"]){
						$json[$i]["nombre"] = $arreglo[$j]["nombre_user"];
						$json[$i]["apellido"] = $arreglo[$j]["apellido_user"];
						$json[$i]["email"] = $arreglo[$j]["email_user"];
						$json[$i]["telefono"] = $arreglo[$j]["telefono_user"];
						$json[$i]["dni"] = $arreglo[$j]["dni_user"];
						$j=$x;
					}
				}
				$i++;
			}
		}
		$json["cantidad"]=$filas;
		return $json;
	}


	public function insert_data_transactions($datos){
		$this->db->where('email_user', $this->session->email);
		$this->db->update('unc_usuarios', $datos);
	}
}