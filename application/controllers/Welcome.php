<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Perfil_model");
	}

	/*public function obtener_access_token_mp()
	{
		$this->load->view('mp/mercadopago.php');
		$mp = new MP("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV"); //mi user
		//$mp = new MP ("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
		$access_token = $mp->get_access_token();
		//echo $access_token;
		return $access_token;
	}*/

	public function obtener_perfil($all_users,$email)
	{
		$json = array();
		$max = sizeof($all_users);
		for ($i=0; $i < $max; $i++) { 
			if($all_users[$i]["email"]==$email){
				$json["nombre"]=$all_users[$i]["nombre"];
				$json["apellido"]=$all_users[$i]["apellido"];
				$json["nombre_completo"]=$json["nombre"]." ".$json["apellido"];
				$json["email"]=$all_users[$i]["email"];
				$json["profesion"]=$all_users[$i]["profesion"];
				$json["biografia"]=$all_users[$i]["biografia"];
				if ($all_users[$i]["foto"]==""){
					$all_users[$i]["foto"]='uploads/perfiles/'.'uncuyo-perfil-default.gif';
				}
				$json["foto"]=$all_users[$i]["foto"];
				$json["dni"]=$all_users[$i]["dni"];
				$json["telefono"]=$all_users[$i]["telefono"];
				$json["fecha"]=$all_users[$i]["fecha"];
				$json["password"]=$all_users[$i]["password"];
				$json["es_egresado"]=$all_users[$i]["es_egresado"];
				$json["facultad"]=$all_users[$i]["facultad"];
				$json["carrera"]=$all_users[$i]["carrera"];
				$json["latitud"]=$all_users[$i]["latitud"];
				$json["longitud"]=$all_users[$i]["longitud"];
			}
		}
		return $json;
		
	}

	public function obtener_mails($all_users)
	{
		$json = array();
		$max = sizeof($all_users);
		for ($i=0; $i < $max; $i++) {
			$json[$i]["email_user"] = $all_users[$i]["email"];
		}
		return $json;
	}

	public function obtener_marcadores($all_users)
	{
		$json = array();
		$max = sizeof($all_users);
		for ($i=0; $i < $max; $i++) { 
			$json[$i]["nombre"]=$all_users[$i]["nombre"];
			$json[$i]["apellido"]=$all_users[$i]["apellido"];
			$json[$i]["email"]=$all_users[$i]["email"];
			$json[$i]["profesion"]=$all_users[$i]["profesion"];
			$json[$i]["facultad"]=$all_users[$i]["facultad"];
			$json[$i]["carrera"]=$all_users[$i]["carrera"];
			$json[$i]["es_egresado"]=$all_users[$i]["es_egresado"];
			$json[$i]["fecha"]=$all_users[$i]["fecha"];
			$json[$i]["biografia"]=$all_users[$i]["biografia"];
			$json[$i]["latitud"]=$all_users[$i]["latitud"];
			$json[$i]["longitud"]=$all_users[$i]["longitud"];
			if ($all_users[$i]["foto"]==""){
				$all_users[$i]["foto"]='uploads/perfiles/'.'uncuyo-perfil-default.gif';
			}
			$json[$i]["foto"]=$all_users[$i]["foto"];			
		}
		return $json;
	}

	public function index($payment=0, $status=0)
	{
		//Deshabilitado esto y eld onar abajo hasta nuevo aviso

		/*$this->load->view('mp/mercadopago.php');
		$mp = new MP("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV"); //mi user
		//$mp = new MP("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
		$preference_data = array(
			"items" => array(
				array(
					"title" => "Test 10",
					"quantity" => 1,
					"currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
					"unit_price" => 1.00
				)
			)
		);

		$preference = $mp->create_preference($preference_data);
		$obj["preference"] = $preference;*/

		$datos = array(
			"email_user" => $this->session->email
		);

		$all_users = $this->Perfil_model->get_all_users();
		$profile = $this->obtener_perfil($all_users,$datos["email_user"]);
		$emails_obtenidos = $this->obtener_mails($all_users);
		$marcadores = $this->obtener_marcadores($all_users);

		$datos["perfil"] = $profile;
		$datos["emails"] = $emails_obtenidos;
		$datos["marcadores"] = $marcadores;

		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('loader/start_preload');
		$this->load->view('layouts/header');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('perfil',$profile);
		$this->load->view('modal');

		if (isset($_SESSION['newsession'])) {
			if ($_SESSION['newsession'] != "yes"){
				$this->load->view('registro');
			}
		} else{
			$this->load->view('registro');
		}
		if($payment!=0){
			$this->load->view('respuesta_status');
		}

		if (isset($_SESSION['newsession'])) {
			if ($_SESSION['newsession'] != "yes"){
				$this->load->view('login');
			}
		} else{
			$this->load->view('login');
		}
		
		//$this->load->view('donar',$obj);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts',$datos);
		$this->load->view('end_body');

	}
}
