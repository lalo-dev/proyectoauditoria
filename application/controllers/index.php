<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('template-clean');
	}

	public function index()
	{
		$this->layout->setTitle('Proyecto - Auditoria');
		//$this->layout->css(array(base_url().'public/css/archivoCSS.css'));
		//$this->layout->css(array(base_url().'public/js/archivoJS.js'));
		$contenido = "Texto de prueba";
		$this->layout->view('index',compact('contenido'));
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */