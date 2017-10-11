<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Donacion extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Donacion_model');
	}

	public function create_number($numero=0){
		$numero = ( ( ( ( ( ( $numero + 17 ) * 3 ) + 7 ) * 41 ) + 17 ) * 57 );
		// echo $numero;
		return $numero;
	}

	public function decode_number($numero=0){
		$numero = ( ( ( ( ( ( $numero / 57 ) - 17 ) / 41 ) - 7 ) / 3 ) - 17 );
		// echo $numero;
		return $numero;
	}

	public function create_status($numero=0){
		$numero = ( ( ( ( ( ( $numero + 57 ) * 91 ) + 7 ) * 87 ) + 57 ) * 61 );
		// echo $numero;
		return $numero;
	}

	public function decode_status($numero=0){
		$numero = ( ( ( ( ( ( $numero / 61 ) -57 ) / 87 ) - 7 ) / 91 ) - 57 );
		// echo $numero;
		return $numero;
	}

	public function index()
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('layouts/header');
		$this->load->view('donacion/landing');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
	}

	public function status($payment=0, $status=0)
	{
		$data["titulo"] = "UNCuyo";
		$class["clase"] = "home";
		$this->load->view('layouts/head',$data);
		$this->load->view('layouts/style');
		$this->load->view('start_body',$class);
		$this->load->view('layouts/header');
		//$this->load->view('donacion/landing');

		// 136515 = 0 en Payment
		// 143526 = 1 en Payment
		// 150537 = 2 en Payment
		// 157548 = 3 en Payment
		// 164559 = 4 en Payment
		// 171570 = 5 en Payment
		// 178581 = 6 en Payment
		
		// 27568035 = 0 en Status
		// 28050972 = 1 en Status

		if($payment!=0){	
			$id = $this->Donacion_model->select_user_info();
			$payment = $this->decode_number($payment);
			if($payment!=0){
				$status = $this->decode_status($status);

				if($status==1){
					$this->load->view('donacion/aceptado');
					$value_status = "Aceptado"; 
				}else{
					$this->load->view('donacion/pendiente');
					$value_status = "Pendiente";
				}
				$datos = array(
					"email"		=> $this->session->email,
					"id_user"	=> $id,
					"valor"		=> $payment,
					"status"	=> $value_status
				);
				echo "Email: ".$datos["email"]."<br>";
				echo "ID: ".$datos["id_user"]."<br>";
				echo "VALOR: ".$datos["valor"]."<br>";
				echo "STATUS: ".$datos["status"]."<br>";
			}
		}
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts');
		$this->load->view('end_body');
	}
}

?>