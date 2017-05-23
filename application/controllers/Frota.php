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
		var_dump($this->teste->getAll());
		$this->load->view('html', $data);
	}

	/**
	 * [Adicionar description]
	 * @param array $dados_automovel [description]
	 */
	public function adicionar(array $dados_automovel)
	{
		$data['titulo'] = 'BVRC - Adicionar';
		$data['page'] = 'frota/adicionar';
		$data['active_menu'] = 'frota';
		$this->load->view('html', $data);
	}

	/**
	 * [Editar description]
	 * @param int $id_automovel [description]
	 */
	public function editar(int $id_automovel)
	{
		$data['titulo'] = 'BVRC - Editar';
		$data['page'] = 'frota/editar';
		$data['active_menu'] = 'frota';
		$this->load->view('html', $data);
	}

	/**
	 * [Remover description]
	 * @param int $id_automovel [description]
	 */
	public function remover(int $id_automovel)
	{
		$data['titulo'] = 'BVRC - Remover';
		$data['page'] = 'frota/remover';
		$data['active_menu'] = 'frota';
		$this->load->view('html', $data);
	}





	public function pesquisa()
	{
		$data['titulo'] = 'BVRC - Remover';
		$data['page'] = 'frota/pesquisa';
		$data['active_menu'] = '';
		$this->load->view('html', $data);
	}
}
