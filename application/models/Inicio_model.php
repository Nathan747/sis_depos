<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function select_jerarquia(){
		$sql2=$this->db->get('unc_usuarios');
		$x=0;
		foreach ($sql2->result() as $row){
			if ( ($row->jerarquia==1) || ($row->jerarquia==3) ){	
				$arreglo[$x]["id_user"] = $row->id_user;
				$arreglo[$x]["nombre_user"] = $row->nombre_user;
				$arreglo[$x]["apellido_user"] = $row->apellido_user;
				$arreglo[$x]["email_user"] = $row->email_user;
				$arreglo[$x]["telefono_user"] = $row->telefono_user;
				$arreglo[$x]["dni_user"] = $row->dni_user;
				$arreglo[$x]["edad_user"] = $row->edad_user;
				$arreglo[$x]["pass_user"] = $row->pass_user;
				$arreglo[$x]["fecha_egreso_user"] = $row->fecha_egreso_user;
				$arreglo[$x]["jerarquia_user"] = $row->jerarquia;
				$arreglo[$x]["facultad_user"] = $row->facultad_user;
				$arreglo[$x]["carrera_user"] = $row->carrera_user;			
				$x++;
			}
		}
		$arreglo["cantidad"]=$x;
		return $arreglo;
	}

	public function select_cantidad_dinero()
	{
		$sql=$this->db->get('unc_cantidad_dinero');
		$filas = $sql->num_rows();
		if($filas>0){
			foreach ($sql->result() as $row){
				$arreglo["cantidad_dinero"] = $row->cantidad_dinero;
				$arreglo["ultima_modificacion"] = $row->ultima_modificacion;
			}
		}
		return $arreglo;
	}

	public function select_becas()
	{
		$sql=$this->db->get('unc_becas');
		$sql2=$this->db->get('unc_usuarios');

		$filas2 = $sql2->num_rows();
		$filas = $sql->num_rows();
		$arreglo="";
		if($filas>0){
			$x=0;
			foreach ($sql->result() as $row){
				$arreglo[$x]["id_becado"] = $row->id_becado;
				$arreglo[$x]["monto_beca"] = $row->monto_beca;
				$arreglo[$x]["fecha_inicio"] = $row->fecha_inicio;
				$arreglo[$x]["ultima_modificacion"] = $row->ultima_modificacion;
				if($filas2>0){
					foreach ($sql2->result() as $row2){
						if($arreglo[$x]["id_becado"] == $row2->id_user){
							$arreglo[$x]["nombre"] = $row2->nombre_user;
							$arreglo[$x]["apellido"] = $row2->apellido_user;
							$arreglo[$x]["dni"] = $row2->dni_user;
						}
					}
				}
			}
		}
		$arreglo["cantidad"] = $filas;
		return $arreglo;
	}

	public function select_transactions()
	{
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

	public function modificar_user($datos)
	{
		$this->db->where('id_user', $datos["id_user"]);
		$data = array(
			"nombre_user" 		=> $datos["nombre_user"],
			"apellido_user" 	=> $datos["apellido_user"],
			"email_user" 		=> $datos["email_user"],
			"telefono_user" 	=> $datos["telefono_user"],
			"email_user" 		=> $datos["email_user"]
		);
		$this->db->update('unc_usuarios', $data);
	}

	public function modificar_becario($datos)
	{
		$this->db->where('id_user', $datos["id_user"]);
		$data = array(
			"nombre_user" 		=> $datos["nombre_user"],
			"apellido_user" 	=> $datos["apellido_user"],
			"telefono_user"		=> $datos["telefono_user"],
			"dni_user" 			=> $datos["dni_user"],
			"fecha_egreso_user"	=> $datos["fecha_egreso_user"],
			"edad_user" 		=> $datos["edad_user"],
			"facultad_user" 	=> $datos["facultad_user"],
			"carrera_user" 		=> $datos["carrera_user"]
		);
		$this->db->update('unc_usuarios', $data);
	}

	public function eliminar_user($datos)
	{
		$this->db->where('id_user', $datos["id_user"]);
		$this->db->delete('unc_usuarios');
	}

	public function insert_user($data)
	{		
		$this->db->insert('unc_usuarios', $data);
	}

	public function obtener_last_id(){
		$sql=$this->db->get('unc_usuarios');

		$filas = $sql->num_rows();

		if($filas>0){
			$x=0;
			$last;
			foreach ($sql->result() as $row){
				$last = $row->id_user;
				$x++;
			}
		}
		return $last;
	}

	public function buscar_becario($datos)
	{		
		$this->db->where('dni_user', $datos["dni_user"]);
		$sql=$this->db->get('unc_usuarios');

		$filas = $sql->num_rows();

		if($filas>0){
			foreach ($sql->result() as $row){
				$arreglo["id_user"] = $row->id_user;
				$arreglo["nombre_user"] = $row->nombre_user;
				$arreglo["apellido_user"] = $row->apellido_user;
				$arreglo["dni_user"] = $row->dni_user;
				$arreglo["edad_user"] = $row->edad_user;
				$arreglo["carrera_user"] = $row->carrera_user;
				$arreglo["fecha_ingreso"] = $row->fecha_egreso_user;
			}
		}
		$arreglo["cantidad"] = $filas;

		return $arreglo;
	}

	
}