    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mercadopago extends CI_Controller {


    $CI = &get_instance();
    $CI->config->load("mercadopago", TRUE);
    $config = $CI->config->item('mercadopago');
    $this->load->library('Mercadopago', $config);  



}