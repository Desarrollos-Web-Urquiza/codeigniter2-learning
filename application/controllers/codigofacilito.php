<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
    function __construct() {
		parent::__construct();
        $this->load->helper('mihelper');
    }
	function index()
    {
        $this->load->library('menu', array('Inicio', 'Contacto', 'Cursos'));
        $data['mi_menu'] = $this->menu->construir_menu();
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido', $data);
    }
    function holamundo()
    {
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }
}

/* End of file codigofacilito.php */
/* Location: ./application/controllers/codigofacilito.php */