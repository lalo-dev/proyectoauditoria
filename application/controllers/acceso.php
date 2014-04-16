<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acceso extends CI_Controller {

	private $session_id;

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('template-clean');
		$this->session_id = $this->session->userdata('login');
	}

	public function index()
	{
		if ( !empty($this->session_id) ) {
			redirect(base_url().'dashboard/', 301);
		} else {
			redirect(base_url().'acceso/usuario', 301);
		}

	}

	public function usuario()
	{
		if ( $this->input->post() ) {
			$usuario     = $this->input->post('usuario',true);
			$contrasenia = sha1($this->input->post('contrasenia',true));
			$acceso      = $this->usuarios_model->getAcceso($usuario,$contrasenia);

			if ( $acceso == 1 ) {
				$datosUsuario   = $this->usuarios_model->getDatosUsuario($usuario,$contrasenia);
				$nombreCompleto = $datosUsuario->nombre.' '.$datosUsuario->apellido_paterno.' '.$datosUsuario->apellido_materno;

				$this->session->set_userdata('auditoria');
				$this->session->set_userdata('login',$datosUsuario->usuario);
				$this->session->set_userdata('nombre',$nombreCompleto);
				$this->session->set_userdata('tipo',$datosUsuario->tipo);

				switch ($datosUsuario->tipo) {
					case '1':
						redirect(base_url().'dashboard/administrador', 301);
						break;

					case '2':
						redirect(base_url().'dashboard/gerente', 301);
						break;

					case '3':
						redirect(base_url().'dashboard/auditor', 301);
						break;

					case '4':
						redirect(base_url().'dashboard/cliente', 301);
						break;

					case '5':
						redirect(base_url().'dashboard/proveedor', 301);
						break;
					
					default:
						
						break;
				}

				redirect(base_url().'dashboard/', 301);
			} else {
				$this->session->set_flashdata('ControllerMessage','Usuario y/o contraseña incorecto');
				redirect(base_url().'acceso/usuario', 301);
			}
		}
		
		$this->layout->setTitle('Proyecto - Auditoria');
		$prueba = "vista desde controlador login-usuario";
		$this->layout->view('usuario',compact('prueba'));
	}

	public function salir()
	{
		$this->session->unset_userdata(array('login'=>''));
		$this->session->sess_destroy('auditoria');

		redirect(base_url().'acceso/usuario', 301);
	}

}

/* End of file acceso.php */
/* Location: ./application/controllers/acceso.php */