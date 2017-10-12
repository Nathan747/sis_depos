<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Inicio_model');
	}

	public function index($payment=0, $status=0)
	{
		$home = "location: ".base_url("");
		header($home);
	}

	public function donacion()
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('layouts/header');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('donacion');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
	}

	public function en_proceso()
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('layouts/header');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('proceso');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
	}

	public function back()
	{
		//$object = $this->cargar_informacion_mp();

		$object = $this->Inicio_model->select_transactions();
		$cant_filas = $object["cantidad"];
		echo $cant_filas;
		
		$data["titulo"] = "Admin UNCuyo";
		$class["clase"] = "home";
		$objeto["objeto"] = $object;
		$this->load->view('backend/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('backend/header');
		$this->load->view('backend/aside');

		$this->load->view('backend/inicio_backend');
		//$this->load->view('backend/gestionar_usuarios');
		$this->load->view('backend/ultimos_movimientos');
		//$this->load->view('backend/becarios');
		//$this->load->view('backend/recaudado');
		$this->load->view('backend/fin_backend');

		$this->load->view('backend/scripts',$objeto);
		$this->load->view('end_body');
	}

	public function obtener_access_token_mp(){
		$this->load->view('mp/mercadopago.php');
		$mp = new MP ("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV");
		//$mp = new MP ("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
		$access_token = $mp->get_access_token();
		//echo $access_token;
		return $access_token;
	}

	public function cargar_informacion_mp()
	{
		$curl = curl_init();

		$access_token =	$this->obtener_access_token_mp();
		$url = "https://api.mercadopago.com/v1/payments/search?collector.id=150678392&access_token=".$access_token;

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$response = json_decode($response, true); //because of true, it's in an array
		$cantidad_elementos = sizeof($response["results"]);

		$mp = new MP ("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV");
		//$balance = $mp->get ("/users/150678392/mercadopago_account/balance");
		//$balance = $mp->get ("/mercadopago_account/movements/search");

		$resultados = $response["results"];
		return $resultados;
		
		//return $balance;
	}

	public function perfil()
	{
		$data["titulo"] = "Perfil UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('editperfil/header');
		$this->load->view('editperfil/aside');
		$this->load->view('editperfil/contenido');
		$this->load->view('editperfil/scripts');
		$this->load->view('end_body');
	}

	public function logout()
	{
		session_unset();
		$this->session->set_userdata("EMAIL",NULL);
		$this->session->set_userdata("FULLNAME",NULL);
		$this->session->set_userdata("FBID",NULL);
		$this->session->unset_userdata("newsession");
		$json["eliminado"]=1;
		echo json_encode($json);
	}
}
