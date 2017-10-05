<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Inicio_model');
	}

	public function index()
	{
		//$this->session->sess_destroy();
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('layouts/header');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		//$this->load->view('registro');
		$this->load->view('login');
		$this->load->view('donar');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
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
		$objeto = $this->cargar_informacion_mp();
		$cantidad_elementos = sizeof($objeto);
		$cant_filas = $this->Inicio_model->select_transactions();
		if($cant_filas==0){
			echo "<table border=1>
			<tr>
			<th>ID Usuario</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>DNI</th>
			<th>Usuario</th>
			<th>Teléfono</th>
			<th>Fecha Creada</th>
			<th>Fecha Aprobada</th>
			<th>Fecha Dinero Enviado</th>
			<th>Fecha Actualizacion</th>
			<th>Status</th>
			<th>Monto Transacción</th>
			<th>Costo Envío</th>
			<th>Valor Neto</th>
			</tr>";
			for($i=0;$i<$cantidad_elementos;$i++){
				echo "<tr>";
				echo "<td>".$objeto[$i]["payer_id"]."</td>";
				echo "<td>".$objeto[$i]["payer"]["first_name"]."</td>";
				echo "<td>".$objeto[$i]["payer"]["last_name"]."</td>";
				echo "<td>".$objeto[$i]["payer"]["email"]."</td>";
				echo "<td>".$objeto[$i]["payer"]["identification"]["number"]."</td>";
				echo "<td>".$objeto[$i]["payer"]["nickname"]."</td>";
				echo "<td>".$objeto[$i]["payer"]["phone"]["number"]."</td>";
				echo "<td>".$objeto[$i]["date_created"]."</td>";
				echo "<td>".$objeto[$i]["date_approved"]."</td>";
				echo "<td>".$objeto[$i]["money_release_date"]."</td>";
				echo "<td>".$objeto[$i]["date_last_updated"]."</td>";
				echo "<td>".$objeto[$i]["status"]."</td>";
				echo "<td>".$objeto[$i]["transaction_amount"]."</td>";
				echo "<td>".$objeto[$i]["shipping_cost"]."</td>";
				echo "<td>".$objeto[$i]["transaction_details"]["net_received_amount"]."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		$data["titulo"] = "Admin UNCuyo";
		$class["clase"] = "home";
		$this->load->view('backend/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('backend/header');
		$this->load->view('backend/aside');
		$this->load->view('backend/contenido');
		$this->load->view('backend/scripts');
		$this->load->view('end_body');
	}

	public function obtener_access_token_mp(){
		$this->load->view('mp/mercadopago.php');
		$mp = new MP ("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV");
		$access_token = $mp->get_access_token();
		return $access_token;
	}

	public function cargar_informacion_mp()
	{
		$curl = curl_init();

		$access_token =	$this->obtener_access_token_mp();
		$url = "https://api.mercadopago.com/v1/payments/search?payer.id=150678392&access_token=".$access_token;

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
		$resultados = $response["results"];
		return $resultados;
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
