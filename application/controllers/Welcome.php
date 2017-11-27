<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Perfil_model");
	}

	public function obtener_access_token_mp()
	{
		$this->load->view('mp/mercadopago.php');
		$mp = new MP("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV"); //mi user
		//$mp = new MP ("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
		$access_token = $mp->get_access_token();
		//echo $access_token;
		return $access_token;
	}

	public function index($payment=0, $status=0)
	{

		$this->load->view('mp/mercadopago.php');
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
		$obj["preference"] = $preference;

		$datos = array(
			"email_user" => $this->session->email
		);
		$profile=$this->Perfil_model->control_user($datos);
		$perfil2["perfil"] = $profile;

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
		
		$this->load->view('donar',$obj);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts',$perfil2);
		$this->load->view('end_body');
	}
}
