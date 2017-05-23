<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frota extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('frota_model', 'frota');
		$this->load->model('fabricantes_model', 'teste');
	}

	/**
	 * [Pesquisa description]
	 */
	public function index()
	{
		$data['titulo'] = 'BVRC - Frota';
		$data['page'] = 'frota/index';
		$data['active_menu'] = 'frota';
		$data['frota'] = $this->frota->getAll();
		$data['total_rows'] = $this->frota->getCountAll();
		$this->load->view('html', $data);
	}

	/**
	 * [Adicionar description]
	 * @param array $dados_automovel [description]
	 */
	public function Adicionar(array $dados_automovel)
	{
		$data['titulo'] = 'BVRC - Adicionar';
		$data['page'] = 'frota/adicionar';
		$data['active_menu'] = 'frota';
		$this->load->view('publico', $data);
	}

	/**
	 * [Editar description]
	 * @param int $id_automovel [description]
	 */
	public function Editar(int $id_automovel)
	{
		$data['titulo'] = 'BVRC - Editar';
		$data['page'] = 'frota/editar';
		$data['active_menu'] = 'frota';
		$this->load->view('publico', $data);
	}

	/**
	 * [Remover description]
	 * @param int $id_automovel [description]
	 */
	public function Remover(int $id_automovel)
	{
		$data['titulo'] = 'BVRC - Remover';
		$data['page'] = 'frota/remover';
		$data['active_menu'] = 'frota';
		$this->load->view('publico', $data);
	}
}
