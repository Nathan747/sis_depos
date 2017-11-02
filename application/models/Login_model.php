<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
class Login_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
  }

  public function control_user($data)
  {
    $sql = $this->db->where($data)->get('unc_usuarios');	
      // Puedo pasar un array como parametro y toma cada indice como consulta para la base de datos.       				
      //echo json_encode($sql->row_array()); Obtengo todos los valores de la consulta.

    $filas = $sql->num_rows();
    if ($filas > 0) {
      $this->session->set_userdata("newsession", "yes");
      $json["entro"] = 1;
      foreach ($sql->result() as $row) {
        $nombre_completo = $row->nombre_user . " " . $row->apellido_user;
        $email = $row->email_user;
        $jerarquia = $row->jerarquia;
        $id = $row->id_user;
      }
      $this->session->set_userdata('username', $nombre_completo);
      $this->session->set_userdata('email', $email);
      $this->session->set_userdata('jerarquia', $jerarquia);
      $this->session->set_userdata('id', $id);
      $json["username"] = $nombre_completo;
    }
    else {
      $this->session->set_userdata("newsession", "no");
      $json["entro"] = 0;
      $json["username"] = "none";
    }
    return $json;
  }

  public function existe_mail($data)
  {
    $sql = $this->db->where($data)->get('unc_usuarios');
    $filas = $sql->num_rows();
    if ($filas > 0) {
      $variable = 1;
    }
    else {
      $variable = 0;
    }
    return $variable;
  }

  public function obtener_id($data)
  {
    $sql = $this->db->where($data)->get('unc_usuarios');
    $filas = $sql->num_rows();
    if ($filas > 0) {
      foreach ($sql->result() as $row) {
        $id = $row->id_user;
      }
    }
    return $id;
  }

  public function recuperar_pass($data)
  {
    $sql = $this->db->where($data)->get('unc_usuarios');
    $filas = $sql->num_rows();
    if ($filas > 0) {
      foreach ($sql->result() as $row) {
        $JSON["pass"] = $row->pass_user;
        $JSON["nombre"] = $row->nombre_user;
        $JSON["encontro"] = 1;
      }
    }
    else {
      $JSON["encontro"] = 0;
    }
    return $JSON;
  }

}