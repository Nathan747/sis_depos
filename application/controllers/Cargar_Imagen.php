<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
class Cargar_Imagen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cargar_model');
	}

	public function index()
	{
		$data["titulo"] = "UNCuyo";
		$this->load->view('layouts/head',$data);
		$this->load->view('imagenes/index');
		$this->load->view('layouts/scripts');
	}

	public function proceso()
	{
		//$target_path = "C:\\xampp2/htdocs/UNC/assets/img/pics/";
		$target_path = "assets/img/pics/";
		$target_path = $target_path . basename( $_FILES['imagen']['name']); 

		$nombre_fichero = $_FILES['imagen']['tmp_name'];
		list($ancho, $alto) = getimagesize($nombre_fichero);
		echo "ANCHO: " . $ancho . "<br>";
		echo "ALTO: " . $alto . "<br>";

		$max_ancho = 200;
		$max_alto = 159;

		$promedio_alto = $max_alto / $alto;
		$promedio_ancho = $max_ancho / $ancho;

		if($ancho>$alto){
			$max_ancho = $ancho * $promedio_alto;	
			$nuevo_alto = $alto * $promedio_alto;	
			echo "Resolucion horizontal: ".$max_ancho."x".$nuevo_alto."<br>";
			$resto = $max_ancho - 200;
			$eliminar_bordes_y = $max_alto;
			$offset_x = $resto / 2;
			$eliminar_bordes_x = $max_ancho - $offset_x;
			$offset_y = 0;
			$max_ancho = 200;

		}else{
			$max_alto = $alto * $promedio_ancho;
			$nuevo_ancho = $ancho * $promedio_ancho;	
			echo "Resolucion vertical: ".$nuevo_ancho."x".$max_alto."<br>";	
			$resto = $max_alto - 159;
			$eliminar_bordes_x = $max_ancho;
			$offset_y = $resto / 2;
			$eliminar_bordes_y = $max_alto - $offset_y;
			$offset_x = 0;
			$max_alto = 159;
		}

		$new_image = imagecreatetruecolor($max_ancho, $max_alto);
		switch($_FILES['imagen']['type']){
			case 'image/jpeg':
			$old_image = imagecreatefromjpeg($nombre_fichero); 
			imagecopyresampled($new_image,$old_image,0,0,$offset_x,$offset_y,$eliminar_bordes_x, $eliminar_bordes_y, $ancho, $alto); 
			imagejpeg($new_image, $target_path, 100);
			break;
			case 'image/png': 
			$old_image = imagecreatefrompng($nombre_fichero);
			imagecopyresampled($new_image,$old_image,0,0,$offset_x,$offset_y,$eliminar_bordes_x, $eliminar_bordes_y, $ancho, $alto); 
			imagepng($new_image, $target_path, 9);
			break;
			case 'image/gif': 
			$old_image = imagecreatefromgif($nombre_fichero);
			imagecopyresampled($new_image,$old_image,0,0,$offset_x,$offset_y,$eliminar_bordes_x, $eliminar_bordes_y, $ancho, $alto); 
			imagegif($new_image, $target_path, 100);
			break;
		}
		$datos = array(
			"img" 		=> $target_path
		);
		$this->Cargar_model->insert_image($datos);
		//header("location: http://localhost:8080/UNC/cargar_imagen/");
	}
}