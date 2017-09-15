<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$data["titulo"] = "LOGIN";

		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('layouts/header');
		$this->load->view('login');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
	}

	public function control()
	{
		$data = $this->input->post();//Se puede reemplazar en esto

		$datos = array(
			"email_user" => $data["email"]
		);

		$existe=$this->Login_model->existe_mail($datos);
		if($existe==1){
			$this->session->set_userdata("username",$data["nombre_completo"]);
			$this->session->set_userdata("email",$data["email"]);


		}
		echo json_encode($existe);
		
	}

	public function set_yes()
	{
		$this->session->set_userdata("newsession","yes");
	}

	public function set_no()
	{
		$this->session->set_userdata("newsession","no");
	}

	public function validar_mail(){
		$data = $this->input->post();
		$datos = array(
			"email_user" => $data["email"]
		);
		$existe=$this->Login_model->recuperar_pass($datos);
		
		if($existe["encontro"]==1){
			$recuperacion = array(
				"email" 	=> $data["email"],
				"nombre"	=> $existe["nombre"],
				"pass"		=> $existe["pass"]
			);
			$email =  $recuperacion["email"];
			$name = $recuperacion["nombre"];
			$email_address = $email;
			$to = $email_address;
			$email_subject = "#SoyDeLaUNCuyo";
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
			Hola <strong>'.$name.'</strong>, tu participación es muy importante para nosotros, por esto te agradecemos el haberte registrado. </p>

			<p>Tu contraseña ha sido restaurada a su version anterior: '.$recuperacion["pass"].'
			</p>

			<p>Gracias por utilizar la plataforma #SoyDeLaUNCuyo!</p>

			</body>
			</html>';
			$json["body"]=$email_body;

			$headers = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=utf-8\n";
			$headers .= "From: UNCuyo <noresponder@uncuyo.com>\r\n";

			$headers .= "Reply-To: $email_address";	
			mail($to,$email_subject,$email_body,$headers);
		}
		echo json_encode($existe);
	}
}
