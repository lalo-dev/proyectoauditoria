<?php

class Usuarios_model extends CI_Model
{
	function __contruct()
	{
		parent::__contruct();
	}

	public function getAcceso($usuario,$contrasenia)
	{
		$query = $this->db
		->select("*")
		->from("usuarios")
		->where(array("usuario"=>$usuario,"contrasenia"=>$contrasenia))
		->count_all_results();

		return $query;
	}

	public function getDatosUsuario($usuario,$contrasenia)
	{
		$query = $this->db
		->select("nombre,apellido_paterno,apellido_materno,usuario,id_tipo_usuario AS tipo")
		->from('usuarios')
		->where(array("usuario"=>$usuario,"contrasenia"=>$contrasenia))
		->get();

		return $query->row();
	}

	public function getUsuarios($tipo)
	{
		$query = $this->db
		->select("id_usuario AS id,nombre,apellido_paterno,apellido_materno,usuario,contrasenia,id_tipo_usuario AS tipo,estado")
		->from("usuarios")
		->where(array("id_tipo_usuario"=>$tipo))
		->get();

		return $query->result();
	}

    public function insertarUsuario($datos=array())
    {
    	$this->db->insert("usuarios",$datos);

    	return true;
    }

    public function modificarUsuario($datos=array(),$id)
    {
    	$this->db->where('id_usuario', $id);
        $this->db->update('usuarios', $datos); 
        
        return true;
    }

    public function eliminarUsuario($id)
    {
        $this->db->delete('usuarios', array('id_usuario' => $id));
        
        return true; 
    }

    public function getUsuarioPorId($id)
    {
        $where=array("id_usuario"=>$id);

        $query=$this->db
        ->select("id_usuario AS id,nombre,apellido_paterno AS ap,apellido_materno AS am,usuario,contrasenia,id_tipo_usuario AS tipo,estado")
        ->from("usuarios")
        ->where($where)
        ->get();
        
        return $query->row();
    }
}