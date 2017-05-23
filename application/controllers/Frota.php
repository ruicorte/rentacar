<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	
	public function Pesquisa()
	{
		$data['teste'] = 'isto é um teste';
		$this->load->view('publico', $data);
	}

	public function Adicionar()
	{
		$data['teste'] = 'isto é um teste';
		$this->load->view('publico', $data);
	}

	public function Editar()
	{
		$data['teste'] = 'isto é um teste';
		$this->load->view('publico', $data);
	}

	public function Remover()
	{
		$data['teste'] = 'isto é um teste';
		$this->load->view('publico', $data);
	}
}
