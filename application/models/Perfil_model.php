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
    $filas = $sql->num_rows();
    if ($filas>0){
      foreach ($sql->result() as $row){
        $nombre = $row->nombre_user;
        $apellido = $row->apellido_user;
        $nombre_completo = $row->nombre_user." ".$row->apellido_user;
        $email = $row->email_user;
        $trabajo_actual = $row->profesion_user;
        $biografia = $row->biografia_user;
        $foto = $row->img;
        $telefono = $row->telefono_user;
        $dni = $row->dni_user;
        $fecha = $row->fecha_egreso_user;
        $password = $row->pass_user;
        $es_egresado = $row->es_egresado_user;
        if ($foto==""){
          $foto='assets/img/pics/'.'1.png';
        }
      }
      $json["nombre"]=$nombre;
      $json["apellido"]=$apellido;
      $json["nombre_completo"]=$nombre_completo;
      $json["email"]=$email;
      $json["profesion"]=$trabajo_actual;
      $json["biografia"]=$biografia;
      $json["foto"]=$foto;
      $json["dni"]=$dni;
      $json["telefono"]=$telefono;
      $json["fecha"]=$fecha;
      $json["password"]=$password;
      $json["es_egresado"]=$es_egresado;
    }else{
      $json["nombre"]="";
      $json["apellido"]="";
      $json["nombre_completo"]="";
      $json["email"]="";
      $json["profesion"]="";
      $json["biografia"]="";
      $json["foto"]="";
      $json["dni"]="";
      $json["telefono"]="";
      $json["fecha"]="";
      $json["password"]="";
      $json["es_egresado"]="";
    }

    return $json; 
  }
}

