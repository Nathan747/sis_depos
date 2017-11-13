<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donacion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Donacion_model');
		$this->load->model('Inicio_model');
	}

	public function create_number($numero = 0)
	{
		$numero = ( ( ( ( ( ($numero + 17) * 3) + 7) * 41) + 17) * 57);
		// echo $numero;
		return $numero;
	}

	public function decode_number($numero = 0)
	{
		$numero = ( ( ( ( ( ($numero / 57) - 17) / 41) - 7) / 3) - 17);
		// echo $numero;
		return $numero;
	}

	public function create_status($numero = 0)
	{
		$numero = ( ( ( ( ( ($numero + 57) * 91) + 7) * 87) + 57) * 61);
		// echo $numero;
		return $numero;
	}

	public function decode_status($numero = 0)
	{
		$numero = ( ( ( ( ( ($numero / 61) - 57) / 87) - 7) / 91) - 57);
		// echo $numero;
		return $numero;
	}

	public function index()
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head', $data);
		$this->load->view('layouts/style');
		$this->load->view('start_body', $class);
		$this->load->view('layouts/header');
		$this->load->view('donacion/landing');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
	}

	public function obtener_access_token_mp()
	{
		$this->load->view('mp/mercadopago.php');
		$mp = new MP("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV"); mi user
		//$mp = new MP ("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
		$access_token = $mp->get_access_token();
		//echo $access_token;
		return $access_token;
	}

	public function cargar_informacion_mp()
	{
		$curl = curl_init();

		$access_token = $this->obtener_access_token_mp();
		$url = "https://api.mercadopago.com/v1/payments/search?collector.id=150678392&access_token=" . $access_token;
		//$url = "https://api.mercadopago.com/v1/payments/search?collector.id=277501295&access_token=" . $access_token;

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

		$mp = new MP("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV"); //mi user
		//$mp = new MP("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
		//$balance = $mp->get ("/users/150678392/mercadopago_account/balance");
		//$balance = $mp->get ("/mercadopago_account/movements/search");

		$resultados = $response["results"];
		return $resultados;
		
		//return $balance;
	}

	public function status($payment = 0, $status = 0)
	{
		// 136515 = 0 en Payment
		// 143526 = 1 en Payment
		// 150537 = 2 en Payment
		// 157548 = 3 en Payment
		// 164559 = 4 en Payment
		// 171570 = 5 en Payment
		// 178581 = 6 en Payment
		
		// 27568035 = 0 en Status
		// 28050972 = 1 en Status

		// http://localhost/UNC/Donacion/status/143526/28050972 PAGO ACEPTADO - 1 PESO
		// http://localhost/UNC/Donacion/status/143526/27568035 PAGO PENDIENTE - 1 PESO

		$objeto = $this->cargar_informacion_mp();
		$cant_filas = $this->Inicio_model->select_transactions();
		$id = $this->Donacion_model->select_user_info();
		$cantidad = sizeof($objeto);
		$object["objeto"] = $objeto;


		if ( ($payment != 0) && ($id != -1)) {
			$payment = $this->decode_number($payment);
			if ($payment != 0) {
				$status = $this->decode_status($status);
				$datos = array(
					"id_usuario" => $id,
					"id_operacion_mp" => $objeto[$cantidad - 1]["order"]["id"],
					"tipo_dinero" => $objeto[$cantidad - 1]["currency_id"],
					"status" => $objeto[$cantidad - 1]["status"],
					"monto_transaction" => $objeto[$cantidad - 1]["transaction_amount"],
					"neto_recibido" => $objeto[$cantidad - 1]["transaction_details"]["net_received_amount"],
					"porcentaje_colaborador" => 0
				);
				if ($this->session->has_userdata('id_colaborador')) {
					if ($this->session->id_colaborador != 0) {
						$datos["porcentaje_colaborador"] = floatval($datos["neto_recibido"]) - (floatval($datos["neto_recibido"]) * 0.1);
					}
				}

				$hoy = date("Y-m-d");

				$datos_usuario = array(
					"cantidad_dinero" => $datos["neto_recibido"],
					"ultima_modificacion" => $hoy
				);

				$respuesta_id_ya_cargado = $this->Donacion_model->control_id_orden($datos["id_operacion_mp"]);
				if ($respuesta_id_ya_cargado == 0) {
					$this->Donacion_model->guardar_informacion_pago($datos);
					$this->Donacion_model->almacenar_dinero($datos_usuario);

					if ($this->session->has_userdata('id_colaborador')) {
						$porcentaje = floatval($datos["neto_recibido"]) * 0.1;
						$datos2 = array(
							"id_colaborador" => $this->session->id_colaborador,
							"id_operacion_mp" => $objeto[$cantidad - 1]["order"]["id"],
							"cantidad_dinero" => $datos["neto_recibido"],
							"recibido" => $porcentaje
						);

						$this->Donacion_model->guardar_informacion_pago_colaborador($datos2);
					}

					if ($status == 1) {
						$home = "location: " . base_url("") . "Donacion/landing_pagado";
					} else {
						$home = "location: " . base_url("") . "Donacion/landing_pendiente";
					}
					header($home);
				} else {
					$home = "location: " . base_url("");
					header($home);
				}


			}
		} else {
			$home = "location: " . base_url("");
			header($home);
		}

	}

	public function invitacion($id = 0)
	{
		$id_colaborador = $this->decode_number($id);
		$this->session->set_userdata('id_colaborador', $id_colaborador);

		$redirect = base_url("") . "Donacion/registro";

		$home = "location: " . $redirect;
		header($home);
	}

	public function registro()
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		/*if($this->session->has_userdata('id_colaborador')){
			echo $this->session->id_colaborador;
		}*/
		$this->load->view('layouts/head', $data);
		$this->load->view('layouts/style');
		if (isset($_SESSION['newsession'])) {
			if ($_SESSION['newsession'] != "yes") {
				$this->load->view('back_colaborador/style');
			} else {
				$this->load->view('back_colaborador/style2');
			}
		} else {
			$this->load->view('back_colaborador/style');
		}
		$this->load->view('start_body', $class);
		$this->load->view('loader/start_preload');
		$this->load->view('layouts/header');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('modal');

		if (isset($_SESSION['newsession'])) {
			if ($_SESSION['newsession'] != "yes") {
				$this->load->view('registro');
			}
		} else {
			$this->load->view('registro');
		}

		if (isset($_SESSION['newsession'])) {
			if ($_SESSION['newsession'] != "yes") {
				$this->load->view('login');
			}
		} else {
			$this->load->view('login');
		}
		$this->load->view('donar');
		$this->load->view('layouts/footer');
		$this->load->view('back_colaborador/script');
		$this->load->view('end_body');
	}

	public function logout()
	{
		session_unset();
		$this->session->set_userdata("EMAIL", NULL);
		$this->session->set_userdata("FULLNAME", NULL);
		$this->session->set_userdata("FBID", NULL);
		$this->session->unset_userdata("newsession");
		$this->session->unset_userdata("email");
		$this->session->unset_userdata("jerarquia");
		$this->session->unset_userdata("id_colaborador");
		$json["eliminado"] = 1;
		echo json_encode($json);
	}


	public function landing_pagado()
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head', $data);
		$this->load->view('layouts/style');
		$this->load->view('start_body', $class);
		$this->load->view('layouts/header');
		$this->load->view('donacion/aceptado');
		$this->load->view('layouts/footer');
		$this->load->view('end_body');
	}


	public function landing_pendiente()
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head', $data);
		$this->load->view('layouts/style');
		$this->load->view('start_body', $class);
		$this->load->view('layouts/header');
		$this->load->view('donacion/pendiente');
		$this->load->view('layouts/footer');
		$this->load->view('end_body');
	}
}

?>