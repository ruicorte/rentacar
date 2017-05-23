<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	/**
	 * [Pesquisa description]
	 */
	public function Pesquisa()
	{
		$data['page'] = 'frota/frota';
		$data['active_menu'] = 'frota';
		$this->load->view('html', $data);
	}

	/**
	 * [Adicionar description]
	 * @param array $dados_automovel [description]
	 */
	public function Adicionar(array $dados_automovel)
	{
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
		$data['page'] = 'frota/remover';
		$data['active_menu'] = 'frota';
		$this->load->view('publico', $data);
	}
}
