<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

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
			$administradores = $this->usuarios_model->getUsuarios('1');
			$gerentes        = $this->usuarios_model->getUsuarios('2');
			$auditores       = $this->usuarios_model->getUsuarios('3');
			$clientes        = $this->usuarios_model->getUsuarios('4');
			$proveedores     = $this->usuarios_model->getUsuarios('5');

			$this->layout->setTitle('Proyecto - Auditoria');			
			$this->layout->view('administrador',compact('administradores','gerentes','auditores','clientes','proveedores'));
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function gerente()
	{
		if ( !empty($this->session_id) ) {
			$auditores       = $this->usuarios_model->getUsuarios('3');
			$clientes        = $this->usuarios_model->getUsuarios('4');
			$proveedores     = $this->usuarios_model->getUsuarios('5');

			$this->layout->setTitle('Proyecto - Auditoria');			
			$this->layout->view('gerente',compact('auditores','clientes','proveedores'));
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function agregar()
	{
		if ( !empty($this->session_id) ) {
			if($this->input->post()) 
            {  
                
                $data=array
                (
					'nombre'           =>$this->input->post('txtNombre',true),
					'apellido_paterno' =>$this->input->post('txtAp',true),
					'apellido_materno' =>$this->input->post('txtAm',true),
					'usuario'          =>$this->input->post('txtUsuario',true),
					'contrasenia'      =>sha1($this->input->post('txtContrasenia',true)),
					'id_tipo_usuario'  =>$this->input->post('slcTipo',true)
                );
                
                $guardar = $this->usuarios_model->insertarUsuario($data);
                
                if($guardar) {
                    $this->session->set_flashdata('ControllerMessage', 'Se ha agregado el registro exitosamente.');
            		redirect(base_url().'usuarios/agregar',  301);
                } else {
                    $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
            		redirect(base_url().'usuarios/agregar',  301);
                }
                
            }

			$this->layout->setTitle('Proyecto - Auditoria');
			$this->layout->view('agregar');
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function editar($id=null)
	{
		if ( !empty($this->session_id) ) {

			if (!$id) {
            	show_404();            
        	}

        	if($this->input->post()) 
            {
                
                $data=array
                (
					'nombre'           =>$this->input->post('txtNombre',true),
					'apellido_paterno' =>$this->input->post('txtAp',true),
					'apellido_materno' =>$this->input->post('txtAm',true),
					'id_tipo_usuario'  =>$this->input->post('slcTipo',true)
                );
                
                $modificar = $this->usuarios_model->modificarUsuario($data,$id);
                
                if ($modificar) {
                    $this->session->set_flashdata('ControllerMessage', 'Se ha editado el registro exitosamente.');
            		redirect(base_url().'usuarios/editar/'.$id,  301);
                } else {
                    $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
            		redirect(base_url().'usuarios/editar/'.$id,  301);
                }
                
            }

	        $datos = $this->usuarios_model->getUsuarioPorId($id);
	        
	        if (sizeof($datos)==0) {
	            show_404();
	        }
			

			$this->layout->setTitle('Proyecto - Auditoria');
			$this->layout->view('editar',compact('id','datos'));
		} else {
			redirect(base_url().'login/usuario', 301);
		}
	}

	public function eliminar($id=null)
	{
        if (!$id) {
            show_404();
        }

        $eliminar = $this->usuarios_model->eliminarUsuario($id);
        
        if ($eliminar) {
            $this->session->set_flashdata("ControllerMessage","Se ha eliminado el registro exitosamente");

            if ($this->session->userdata('tipo') == 1) {
            	redirect(base_url()."usuarios/administrador",310);
            } elseif ($this->session->userdata('tipo') == 2) {
            	redirect(base_url()."usuarios/gerente",310);
            } elseif ($this->session->userdata('tipo') == 3) {
            	redirect(base_url()."usuarios/auditor",310);
            } elseif ($this->session->userdata('tipo') == 4) {
            	redirect(base_url()."usuarios/cliente",310);
            } elseif ($this->session->userdata('tipo') == 5) {
            	redirect(base_url()."usuarios/proveedor",310);
            }
            
        } else {
            $this->session->set_flashdata("ControllerMessage","Se ha producido un error. Inténtelo nuevamente por favor.");

            if ($this->session->userdata('tipo') == 1) {
            	redirect(base_url()."usuarios/administrador",310);
            } elseif ($this->session->userdata('tipo') == 2) {
            	redirect(base_url()."usuarios/gerente",310);
            } elseif ($this->session->userdata('tipo') == 3) {
            	redirect(base_url()."usuarios/auditor",310);
            } elseif ($this->session->userdata('tipo') == 4) {
            	redirect(base_url()."usuarios/cliente",310);
            } elseif ($this->session->userdata('tipo') == 5) {
            	redirect(base_url()."usuarios/proveedor",310);
            }

        }
    }
}

/* End of file usuarios.php */
/* Location: ./application/controllers/usuarios.php */