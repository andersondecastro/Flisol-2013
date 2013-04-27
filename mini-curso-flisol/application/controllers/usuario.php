<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function Usuario()
	{
		parent::__construct();
		$this->load->model('Usuario_model');
	}

	public function index()
	{
		$data = array(
					'title' => 'Cadastro de Usuario'
				);

		$this->load->view('usuario_cadastro', $data, FALSE);
	}

	public function view($value='')
	{
		$data = array(
					'usuarios' => $this->Usuario_model->view()
				);

		$this->load->view('usuario_ver', $data, FALSE);
	}

	public function add()
	{
		$data = array(
					'nome' => $this->input->post("nome_usuario	")
				);

		$this->Usuario_model->add( $data );

		redirect("usuario/view");
	}

	public function del($value='')
	{
		
	}

	public function up($value='')
	{
		if (!empty($_POST)) {
			$data = array('nome' => $this->input->post("nome"));

			$this->Usuario_model->up($this->input->post("nome"), $this->input->post("id"));
			//redirect("usuario/view");
		}

		$data = array(
					'usuario' => $this->Usuario_model->view(array('id'=>$value))
				);

		$this->load->view('usuario_atualizar', $data, FALSE);
	}

}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */