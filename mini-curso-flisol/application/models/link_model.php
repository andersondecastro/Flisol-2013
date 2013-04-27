<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link_model extends CI_Model {

	public function view($value='')
	{
		if ($value!='') {
			$this->db->where($value);
		}

		$this->db->select("descricao, nome")->from("usuario")->join("link", "link.usuario_id = usuario.id")->order_by("usuario.nome");

		return $this->db->get()->result();
	}	

	public function add($data='')
	{
		$this->db->insert("link", $data);
	}

}

/* End of file link.php */
/* Location: ./application/models/link.php */