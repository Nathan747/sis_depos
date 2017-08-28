<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
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
          //$this->session->set_userdata("newsession","yes");
    			$_SESSION['newsession']="yes";
    			$json["entro"]=1;
          //$this->session->set_userdata("email",$data["email_user"]);
          $_SESSION['email'] = $data["email_user"];
          $json["email"]=$data["email_user"];
       	}else{
          //$this->session->set_userdata("newsession","no");
       		$_SESSION['newsession']="no";
       		$json["entro"]=0;
          $json["email"]="none";
       	}
       	echo json_encode($json);
	}
}