<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Inicio_model');
		$this->load->model('Invitacion_model');
	}

	public function index($payment = 0, $status = 0)
	{
		$home = "location: " . base_url("");
		header($home);
	}

	public function donacion()
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head', $data);
		$this->load->view('layouts/style');
		$this->load->view('start_body', $class);
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
		$this->load->view('layouts/head', $data);
		$this->load->view('layouts/style');
		$this->load->view('start_body', $class);
		$this->load->view('layouts/header');
		$this->load->view('ventana_flotante');
		$this->load->view('main');
		$this->load->view('proceso');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
	}

	public function load_colaborador()
	{
		$data = $this->input->post();

		$datos = array(
			"nombre_user" => $data["nombre"],
			"apellido_user" => $data["apellido"],
			"email_user" => $data["email"],
			"telefono_user" => $data["telefono"],
			"pass_user" => $data["pass"],
			"jerarquia" => 1
		);

		$this->Inicio_model->insert_user($datos);
		echo json_encode($data);
	}

	public function load_becario()
	{
		$data = $this->input->post();

		$datos = array(
			"nombre_user" => $data["nombre"],
			"apellido_user" => $data["apellido"],
			"dni_user" => $data["dni"],
			"telefono_user" => $data["telefono"],
			"facultad_user" => $data["facultad"],
			"carrera_user" => $data["carrera"],
			"fecha_egreso_user" => $data["fecha"],
			"edad_user" => $data["edad"],
			"jerarquia" => 3
		);

		$this->Inicio_model->insert_user($datos);
		$last_id = $this->Inicio_model->obtener_last_id();

		$datos = array(
			"nombre_user" => $data["nombre"],
			"apellido_user" => $data["apellido"],
			"dni_user" => $data["dni"],
			"telefono_user" => $data["telefono"],
			"facultad_user" => $data["facultad"],
			"carrera_user" => $data["carrera"],
			"fecha_egreso_user" => $data["fecha"],
			"edad_user" => $data["edad"],
			"id_user" => $last_id,
			"jerarquia" => 3
		);

		echo json_encode($datos);
	}

	public function load_admin()
	{
		$data = $this->input->post();

		$datos = array(
			"nombre_user" => $data["nombre"],
			"apellido_user" => $data["apellido"],
			"email_user" => $data["email"],
			"telefono_user" => $data["telefono"],
			"pass_user" => $data["pass"],
			"jerarquia" => 0
		);

		$this->Inicio_model->insert_user($datos);
		echo json_encode($data);
	}

	public function editar_user()
	{
		$data = $this->input->post();

		$datos = array(
			"nombre_user" => $data["nombre"],
			"apellido_user" => $data["apellido"],
			"email_user" => $data["email"],
			"telefono_user" => $data["telefono"],
			"id_user" => $data["id"]
		);
		$this->Inicio_model->modificar_user($datos);
	}

	public function editar_becario()
	{
		$data = $this->input->post();

		$datos = array(
			"nombre_user" => $data["nombre"],
			"apellido_user" => $data["apellido"],
			"telefono_user" => $data["telefono"],
			"dni_user" => $data["dni"],
			"edad_user" => $data["edad"],
			"fecha_egreso_user" => $data["fecha"],
			"facultad_user" => $data["facultad"],
			"carrera_user" => $data["carrera"],
			"id_user" => $data["id"]
		);
		$this->Inicio_model->modificar_becario($datos);
	}

	public function eliminar_user()
	{
		$data = $this->input->post();
		$datos = array(
			"id_user" => $data["id"]
		);
		$this->Inicio_model->eliminar_user($datos);
	}

	public function back()
	{
		//if ($this->session->has_userdata('jerarquia')) {
			//if ($this->session->jerarquia === "0") {
				$mercado_pago = $this->cargar_informacion_mp();
				$object = $this->Inicio_model->select_transactions();
				$jerarchy = $this->Inicio_model->select_jerarquia();
				$cantidad_dinero = $this->Inicio_model->select_cantidad_dinero();
				$cantidad_becas = $this->Inicio_model->select_becas();
				$cantidad_becas["cantidad_dinero"] = $cantidad_dinero["cantidad_dinero"];
				$cantidad_becas["ultima_modificacion"] = $cantidad_dinero["ultima_modificacion"];
				$cant_filas = $object["cantidad"];

				$objeto["mercadopago"] = $mercado_pago;
				$data["titulo"] = "Admin UNCuyo";
				$class["clase"] = "back";
				$objeto["objeto"] = $object;
				$jerarquia["jerarquia"] = $jerarchy;
				$becas["becas"] = $cantidad_becas;

				$this->load->view('backend/head', $data);
				$this->load->view('layouts/style');
				$this->load->view('start_body', $class);
				$this->load->view('backend/modal');
				$this->load->view('backend/header');
				$this->load->view('backend/aside');

				$this->load->view('backend/inicio_backend');
				$this->load->view('backend/gestionar_usuarios', $jerarquia);
				$this->load->view('backend/ultimos_movimientos');
				$this->load->view('backend/becarios', $becas);
				$this->load->view('backend/recaudado', $becas);
				$this->load->view('backend/fin_backend');

				$this->load->view('backend/scripts', $objeto, $jerarquia, $becas);
				$this->load->view('end_body');
			/*} else {
				$home = "location: " . base_url("");
				header($home);
			}
		} else {
			$home = "location: " . base_url("");
			header($home);
		}*/
	}

	public function obtener_usuarios()
	{
		$becario = $this->Inicio_model->get_users();
		echo json_encode($becario);
	}

	public function modificar_colaborador()
	{
		$data = $this->input->post();
		$datos = array(
			"nombre_user" => $data["nombre"],
			"apellido_user" => $data["apellido"],
			"email_user" => $data["email"],
			"telefono_user" => $data["telefono"],
			"pass_user" => $data["pass"]
		);
		$this->Inicio_model->modificar_colaborador($datos);
	}

	public function back_colaborador()
	{
		/*if ($this->session->has_userdata('jerarquia')){
			if ($this->session->jerarquia==="0"){
			}
		}*/
		$id_user = $this->session->id;
		$datos_colaborador = $this->Inicio_model->get_colaborador($id_user);
		//$usuarios = $this->Inicio_model->get_users();
		$object = $this->Inicio_model->select_transactions_colaborator($id_user);
		$objeto["objeto"] = $object;
		$colaborador["colaborador"] = $datos_colaborador;
		//$colaborador["usuarios"] = $usuarios;
		$data["titulo"] = "Admin UNCuyo";
		$class["clase"] = "back-colaborador";

		$this->load->view('backend/head', $data);
		$this->load->view('layouts/style');
		$this->load->view('start_body', $class);
		$this->load->view('backend/header');
		$this->load->view('back_colaborador/aside');

		$this->load->view('back_colaborador/editar_perfil', $colaborador);
		$this->load->view('back_colaborador/enviar_invitacion');
		$this->load->view('back_colaborador/resumen', $objeto);
		$this->load->view('back_colaborador/script', $objeto);

		$this->load->view('backend/inicio_backend');
		$this->load->view('backend/fin_backend');
		$this->load->view('end_body');
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

	public function generar_link()
	{
		$data = $this->input->post();
		$json["id"] = $this->session->id;
		$json["id_encoded"] = $this->create_number($this->session->id);
		$json["link"] = base_url() . "Donacion/invitacion/" . $json["id_encoded"];
		$email = $data["email"];
		$email_address = $email;
		$to = $email_address;
		$email_subject = "#SOYDELADECUYO";
		$email_body = '<!DOCTYPE html>
			<html lang="es">
			<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>#SOYDELADECUYO</title>
			</head>  
			<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;margin: 0;padding: 0;width: 100% !important;line-height: 100% !important;">
			<center> 

			<p>
			Queremos invitarte a formar parte de nuestra comunidad. Para que le cuentes al mundo que sos de la de Cuyo.
			</p>
			<p>
			¡Ingresa en el siguiente enlace Y enterate de todo!
			</p>

			<p>
				'.$json["link"].'
			</p>


			<p>#SOYDELADECUYO</p>

			</body>
			</html>';
			$json["body"] = $email_body;

			$headers = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=utf-8\n";
			$headers .= "From: UNCuyo <noresponder@uncuyo.com>\r\n";

			$headers .= "Reply-To: $email_address";
			mail($to, $email_subject, $email_body, $headers);
		echo json_encode($json);
	}

	public function imprimir_access_token_mp()
	{
		$this->load->view('mp/mercadopago.php');
		$mp = new MP("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV"); //mi user
		//$mp = new MP("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
		$access_token = $mp->get_access_token();
		//echo $access_token;
		echo $access_token;
	}

	public function obtener_access_token_mp()
	{
		$this->load->view('mp/mercadopago.php');
		$mp = new MP("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV"); //mi user
		//$mp = new MP("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
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

		$mp = new MP("7135103912510152", "JcM0fTp0zyMAMHZ2BNQSrS7SZGZImQxV"); // mi user
		//$mp = new MP("1693304189860337", "pSiu08Ck3WjGR4ElUDjXWUkk0zvUaPrE");
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
		$this->load->view('layouts/head', $data);
		$this->load->view('layouts/style');
		$this->load->view('start_body', $class);
		$this->load->view('editperfil/header');
		$this->load->view('editperfil/aside');
		$this->load->view('editperfil/contenido');
		$this->load->view('editperfil/scripts');
		$this->load->view('end_body');
	}


	public function buscar_becario()
	{
		$data = $this->input->post();
		$datos = array(
			"dni_user" => $data["dni"]
		);
		$becario = $this->Inicio_model->buscar_becario($datos);
		//echo json_encode($becario);
		echo json_encode($becario);
	}

	public function asignar_beca()
	{
		$data = $this->input->post();
		$hoy = date("Y-m-d");
		$datos = array(
			"dni_user" => $data["dni"],
			"monto_beca" => $data["dinero"],
			"ultima_modificacion" => $hoy
		);

		$datos2 = array(
			"cantidad_dinero" => $data["dinero_total"],
			"ultima_modificacion" => $hoy
		);

		$this->Inicio_model->asignar_beca($datos);
		$this->Inicio_model->restar_dinero($datos2);
	}

	public function logout()
	{
		session_unset();
		$this->session->set_userdata("EMAIL", NULL);
		$this->session->set_userdata("FULLNAME", NULL);
		$this->session->set_userdata("FBID", NULL);
		$this->session->unset_userdata("newsession");
		$this->session->unset_userdata("email");
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("jerarquia");
		$this->session->unset_userdata("id_colaborador");
		$this->session->unset_userdata("id");
		$json["eliminado"] = 1;
		echo json_encode($json);
	}

}
