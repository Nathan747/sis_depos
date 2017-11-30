<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
class Cargar_Imagen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cargar_model');
		$this->load->library('session');
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
		$target_path = "uploads/perfiles/";
		$target_path = $target_path . basename( $_FILES['imagen']['name']);
		if ( ($_FILES['imagen']['type']=='image/jpeg') || ($_FILES['imagen']['type']=='image/png') || ($_FILES['imagen']['type']=='image/gif') ){
			
			$nombre_fichero = $_FILES['imagen']['tmp_name'];
			list($ancho, $alto) = getimagesize($nombre_fichero);

			$max_ancho = 200;
			$max_alto = 200;

			$promedio_alto = $max_alto / $alto;
			$promedio_ancho = $max_ancho / $ancho;
			
			if($ancho>$alto){
				$nuevo_alto = $alto * $promedio_alto;
				$nuevo_ancho = $ancho * $promedio_alto;
				$max_ancho = $ancho * $promedio_alto;	
				$resto = $max_ancho - 200;
				$eliminar_bordes_y = $max_alto;
				$offset_x = $resto / 2;
				$eliminar_bordes_x = $max_ancho - $offset_x;
				$offset_y = 0;
				$max_ancho = 200;

			}else{
				$nuevo_alto = $alto * $promedio_ancho;
				$nuevo_ancho = $ancho * $promedio_ancho;
				$max_alto = $alto * $promedio_ancho;
				$resto = $max_alto - 200;
				$eliminar_bordes_x = $max_ancho;
				$offset_y = $resto / 2;
				$eliminar_bordes_y = $max_alto - $offset_y;
				$offset_x = 0;
				$max_alto = 200;
			}

			$new_image = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
			switch($_FILES['imagen']['type']){
				case 'image/jpeg':
				$old_image = imagecreatefromjpeg($nombre_fichero); 
				imagecopyresampled($new_image,$old_image,0,0,0,0,$nuevo_ancho, $nuevo_alto, $ancho, $alto); 
				if($ancho>$alto){
					$new_image = imagecrop($new_image, ['x' => $offset_x, 'y' => 0, 'width' => 200, 'height' => 200]);
				}else{
					$new_image = imagecrop($new_image, ['x' => 0, 'y' => $offset_y, 'width' => 200, 'height' => 200]);
				}
				imagejpeg($new_image, $target_path, 100);
				break;
				case 'image/png': 
				$old_image = imagecreatefrompng($nombre_fichero);
				imagecopyresampled($new_image,$old_image,0,0,0,0,$nuevo_ancho, $nuevo_alto, $ancho, $alto); 
				if($ancho>$alto){
					$new_image = imagecrop($new_image, ['x' => $offset_x, 'y' => 0, 'width' => 200, 'height' => 200]);
				}else{
					$new_image = imagecrop($new_image, ['x' => 0, 'y' => $offset_y, 'width' => 200, 'height' => 200]);
				}
				imagepng($new_image, $target_path, 9);
				//imagepng($old_image, $target_path, 9);
				break;
				case 'image/gif': 
				$old_image = imagecreatefromgif($nombre_fichero);
				imagecopyresampled($new_image,$old_image,0,0,0,0,$nuevo_ancho, $nuevo_alto, $ancho, $alto); 
				if($ancho>$alto){
					$new_image = imagecrop($new_image, ['x' => $offset_x, 'y' => 0, 'width' => 200, 'height' => 200]);
				}else{
					$new_image = imagecrop($new_image, ['x' => 0, 'y' => $offset_y, 'width' => 200, 'height' => 200]);
				}
				imagegif($new_image, $target_path, 100);
				//imagegif($old_image, $target_path, 100);
				break;
			}
			$datos = array(
				"img" 		=> $target_path
			);
			$this->Cargar_model->insert_image($datos);
		}
		
		$home = "location: ". base_url('');
		header($home);
	}
}