<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $session_id;
	
	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('template-general');
		$this->session_id = $this->session->userdata('login');
	}

	public function index()
	{
		if ( !empty($this->session_id) ) {
			$this->layout->setTitle('Proyecto - Auditoria');
			$this->layout->view('index');
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function administrador()
	{
		if ( !empty($this->session_id) ) {
			$this->layout->setTitle('Proyecto - Auditoria');
			
			$this->layout->view('administrador');
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function gerente()
	{
		if ( !empty($this->session_id) ) {
			$this->layout->setTitle('Proyecto - Auditoria');
			
			$this->layout->view('gerente');
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function auditor()
	{
		if ( !empty($this->session_id) ) {
			$this->layout->setTitle('Proyecto - Auditoria');
			
			$this->layout->view('auditor');
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function cliente()
	{
		if ( !empty($this->session_id) ) {
			$this->layout->setTitle('Proyecto - Auditoria');
			
			$this->layout->view('cliente');
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function proveedor()
	{
		if ( !empty($this->session_id) ) {
			$this->layout->setTitle('Proyecto - Auditoria');
			
			$this->layout->view('proveedor');
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */