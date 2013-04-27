<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function view($value='')
	{
		if ($value!='') {
			$this->db->where($value);
		}

		return $this->db->get( "usuario" )->result();
	}

	public function add($data='')
	{
		$this->db->insert( "usuario", $data );
	}

	public function up($data='', $clause='')
	{
		$qr = "update usuario set nome = '$data' where id = " . $clause;
		$this->db->query($qr);
	}

}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */