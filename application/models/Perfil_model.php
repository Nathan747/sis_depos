<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
class Perfil_model extends CI_Model {

  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
  }

  public function get_all_users()
  {
    $sql=$this->db->get('unc_usuarios');
    $filas = $sql->num_rows();
    $i=0;
    $json=array();
    foreach ($sql->result() as $row){
      $id = $row->id_user;
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
      $facultad = $row->facultad_user;
      $carrera = $row->carrera_user;
      $latitud = $row->lat_user;;
      $longitud = $row->long_user;;
      if ($foto==""){
        $foto='uploads/perfiles/'.'uncuyo-perfil-default.gif';
      }
      $json[$i]["id"]=$id;
      $json[$i]["nombre"]=$nombre;
      $json[$i]["apellido"]=$apellido;
      $json[$i]["nombre_completo"]=$nombre_completo;
      $json[$i]["email"]=$email;
      $json[$i]["profesion"]=$trabajo_actual;
      $json[$i]["biografia"]=$biografia;
      $json[$i]["foto"]=$foto;
      $json[$i]["dni"]=$dni;
      $json[$i]["telefono"]=$telefono;
      $json[$i]["fecha"]=$fecha;
      $json[$i]["password"]=$password;
      $json[$i]["es_egresado"]=$es_egresado;
      $json[$i]["facultad"]=$facultad;
      $json[$i]["carrera"]=$carrera;
      $json[$i]["latitud"]=$latitud;
      $json[$i]["longitud"]=$longitud;
      $i++;
    }
    return $json;
  }

  /*public function control_user($data)
  {		
    $sql=$this->db->where($data)->get('unc_usuarios');	
    $filas = $sql->num_rows();
    $i=0;
    $json=array();
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
        $facultad = $row->facultad_user;
        $carrera = $row->carrera_user;
        $latitud = $row->lat_user;;
        $longitud = $row->long_user;;
        if ($foto==""){
          $foto='uploads/perfiles/'.'uncuyo-perfil-default.gif';
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
      $json["facultad"]=$facultad;
      $json["carrera"]=$carrera;
      $json["latitud"]=$latitud;
      $json["longitud"]=$longitud;
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
      $json["facultad"]="";
      $json["carrera"]="";
      $json["latitud"]="";
      $json["longitud"]="";
    }

    return $json; 
  }*/


  public function actualizar($datos) 
  {
    $this->db->where('email_user', $this->session->email);
    $this->db->update('unc_usuarios', $datos);
    $nombre_completo = $datos["nombre_user"]." ".$datos["apellido_user"];
    $this->session->set_userdata('username',$nombre_completo);
  }
}

