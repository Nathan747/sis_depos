<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
class Perfil_model extends CI_Model {

  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
  }

  public function control_user($data)
  {		
    $sql=$this->db->where($data)->get('unc_usuarios');	
      // Puedo pasar un array como parametro y toma cada indice como consulta para la base de datos.       				
      //echo json_encode($sql->row_array()); Obtengo todos los valores de la consulta.

    $filas = $sql->num_rows();
    if ($filas>0){
      foreach ($sql->result() as $row){
        $nombre_completo = $row->nombre_user." ".$row->apellido_user;
        $email = $row->email_user;
        $profesion = $row->profesion_user;
        $biografia = $row->biografia_user;
        $foto = $row->img;
        if ($foto==""){
          $foto='assets/img/pics/'.'1.png';
        }

      }

      $json["nombre_completo"]=$nombre_completo;
      $json["email"]=$email;
      $json["profesion"]=$profesion;
      $json["biografia"]=$biografia;
      $json["foto"]=$foto;
    }else{
      $json["nombre_completo"]="";
      $json["email"]="";
      $json["profesion"]="";
      $json["biografia"]="";
      $json["foto"]="";
    }

    return $json; 
  }
}

