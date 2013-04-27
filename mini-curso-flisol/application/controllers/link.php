<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends CI_Controller {

	public function Link($value='')
	{
		parent::__construct();
		$this->load->model('Link_model');
	}

	public function index()
	{
		$this->load->model('Usuario_model');

		$data = array(
					'usuarios' => $this->Usuario_model->view()
				);

		$this->load->view('link_cadastro', $data);
	}

	public function add($value='')
	{
		$data = array(
					'usuario_id' => $this->input->post("usuario_id"),
					'descricao' => $this->input->post("descricao")
				);

		$this->Link_model->add($data);

		redirect("link/view");
	}

	public function view($value='')
	{
		$data = array(
					'links' => $this->Link_model->view()
				);

		$this->load->view('link_ver', $data, FALSE);
	}

}

/* End of file link.php */
/* Location: ./application/controllers/link.php */