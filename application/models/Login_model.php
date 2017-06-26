<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
    	parent::__construct();
    	$this->load->database();
    }

	public function control_user($data)
	{		
		$sql=$this->db->where($data)->get('unc_usuarios');	
       	// Puedo pasar un array como parametro y toma cada indice como consulta para la base de datos.       				
       	//echo json_encode($sql->row_array()); Obtengo todos los valores de la consulta.
       	
       	$filas = $sql->num_rows();
       	if ($filas>0){
			$_SESSION['newsession']="yes";
			$json["entro"]=1;
       	}else{
       		$_SESSION['newsession']="no";
       		$json["entro"]=0;
       	}
       	echo json_encode($json);
	}
}