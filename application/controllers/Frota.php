<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frota extends CI_Controller {


	public function __construct(){
		parent::__construct();

		$this->load->model('frota_model', 'frota');
		$this->load->model('fabricantes_model', 'teste');
		$this->load->model('Mensagem_model');
	}

	/**
	 * [Pesquisa description]
	 */
	
	public function index( bool $status=NULL){
		$search = $this->input->post() ?? [];

		$data['status'] 	 = $status;
		$data['titulo'] 	 = 'BVRC - Frota';
		$data['page'] 		 = 'frota/index';
		$data['active_menu'] = 'frota';
		$data['frota']  	 = $this->frota->getAll($search);
		$data['total_rows']  = $this->frota->getCountAll($search);

		$data_formulario     		  = ['container_fluid' => true];
		$data['formulario_automovel'] = $this->load->view('frota/formulario_automovel', $data_formulario, true);
		
		$this->load->view('html', $data);

	}

	/**
	 * [Adicionar description]
	 * @param array $dados_automovel [description]
	 */
	
	public function inserir(array $dados_automovel = []){
		$data['titulo'] 	 = 'BVRC - Inserir';
		$data['page'] 		 = 'frota/formulario_automovel';
		$data['active_menu'] = 'frota';

		$this->load->model('cores_model');
		$data['cores'] = $this->cores_model->getAll();

		$this->load->model('fabricantes_model');
		$data['fabricantes'] = $this->fabricantes_model->getAll();
		
		$this->load->model('modelos_model');
		foreach($data['fabricantes'] as $fab){
			$data['modelos'][$fab['id']] = $this->modelos_model->getAll($fab['id']);
		}
		$this->load->view('html', $data);
	}

	/**
	 * [Editar description]
	 * @param int $id_automovel [description]
	 */
	
	public function editar(int $id_automovel){
		$data['titulo'] 	 = 'BVRC - Editar';
		$data['page'] 	 	 = 'frota/editar';
		$data['active_menu'] = 'frota';

		$this->load->view('html', $data);
	}

	/**
	 * [Remover description]
	 * @param int $id_automovel [description]
	 */
	
	public function remover(int $id_automovel){
		$data['titulo']  	  = 'BVRC - Remover';
		$data['page'] 	 	  = 'frota/remover';

		$data['active_menu']  = 'frota';

		$data['id_automovel'] = $id_automovel;
		$data['matricula']    = $this->frota->getMatricula($id_automovel);

		
		if( $this->input->post())
		{
			$status= $this->frota->deleteAutomovel($id_automovel);
			$this->index($status);
		}else
		{
			$data['page'] 	 	  = 'frota/remover';
		}
		$this->load->view('html', $data);
	}

	public function pesquisa(){
		$data['titulo'] 	 = 'BVRC - Remover';
		$data['page'] 		 = 'frota/pesquisa';
		$data['active_menu'] = '';

		$this->load->view('html', $data);
	}

	public function listarEmail(int $id=NULL){
		$data['titulo'] 	 = 'BVRC - Remover';
		$data['page'] 		 = 'frota/tableEmail';
		$data['active_menu'] = '';
		$data['email']    = $this->Mensagem_model->getMessages();

		if( $this->input->post())
		{
		$data['status']= $this->Mensagem_model->deleteMessage($id);
		$data['email']    = $this->Mensagem_model->getMessages();
		}
		
	$this->load->view('html', $data);
}
}
