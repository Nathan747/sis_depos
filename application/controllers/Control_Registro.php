<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Registro extends CI_Controller {
	//$this->load->library('session');
	public function __construct(){
		parent::__construct();
		$this->load->model('Registro_model');
	}

	public function load_user_info()
	{	

		$data = $this->input->post();//Se puede reemplazar en esto

		$datos = array(
			"nombre_user" 		=> $data["nombre"],
			"apellido_user" 	=> $data["apellido"],
			"email_user" 		=> $data["email"],
			"telefono_user" 	=> $data["telefono"],
			"es_egresado_user"	=> $data["egresado"],
			"fecha_egreso_user" => $data["fecha_egresado"],
			"pass_user" 		=> $data["password"],
			"profesion_user"	=> $data["profesion"],
			"lat_user" 			=> $data["latitud"],
			"long_user" 		=> $data["longitud"],
			"jerarquia" 		=> 2
		);

		$datos_mail = array(
			"email"		=> $data["email"],
			"nombre"	=> $data["nombre"]
		);

		$this->Registro_model->insert_user($datos);
		$email =  $datos_mail["email"];
		$name = $datos_mail["nombre"];
		$email_address = $email;
		$to = $email_address;
		$email_subject = "Gracias por registrarte en la plataforma #SoyDeLaUNCuyo";
		$email_body = '<!DOCTYPE html>
		<html lang="es">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>#SoyDeLaUNCuyo</title>
		</head>  
		<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;margin: 0;padding: 0;width: 100% !important;line-height: 100% !important;">
		<center> 

		<p>
		Hola <strong>'.$name.'</strong>, tu participación es muy importante para nosotros, por esto te agradecemos el haberte registrado. 
		</p>

		</body>
		</html>';

		$headers = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=utf-8\n";
		$headers .= "From: UNCuyo <noresponder@uncuyo.com>\r\n";

		$headers .= "Reply-To: $email_address";	
		mail($to,$email_subject,$email_body,$headers);
		
		echo json_encode($data);
	}

	public function control_email()
	{
		$data = $this->input->post();
		$datos = array(
			"email_user" => $data["email"]
		);
		$existe_mail = $this->Registro_model->existe($datos);
		echo $existe_mail;
	}

	public function bring_mails()
	{
		$mails = $this->Registro_model->bring_mails();
		echo json_encode($mails);
	}
}