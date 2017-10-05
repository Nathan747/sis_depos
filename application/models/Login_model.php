<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
class Login_model extends CI_Model {

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
      $this->session->set_userdata("newsession","yes");
      $json["entro"]=1;
      foreach ($sql->result() as $row){
        $nombre_completo = $row->nombre_user." ".$row->apellido_user;
        $email = $row->email_user;

      }
      $this->session->set_userdata('username',$nombre_completo);
      $this->session->set_userdata('email',$email);
      $json["username"]=$nombre_completo;
    }else{
      $this->session->set_userdata("newsession","no");
      $json["entro"]=0;
      $json["username"]="none";
    }
    echo json_encode($json);
  }

  public function existe_mail($data){
    $sql=$this->db->where($data)->get('unc_usuarios');
    $filas = $sql->num_rows();
    if ($filas>0){
      $this->session->set_userdata("newsession","yes");
      $this->session->set_userdata("email",$data["email_user"]);
      return 1;
    }else{
      $this->session->set_userdata("newsession","no");
      return 0;
    }
  }

  public function recuperar_pass($data){
    $sql=$this->db->where($data)->get('unc_usuarios');
    $filas = $sql->num_rows();
    if ($filas>0){
      foreach ($sql->result() as $row){
        $JSON["pass"] = $row->pass_user;
        $JSON["nombre"] = $row->nombre_user;
        $JSON["encontro"] = 1;
      }
    }else{
      $JSON["encontro"] = 0;
    }
    return $JSON;
  }

}