<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frota extends CI_Controller {

	/**
	 * [__construct description]
	 */
	
	public function __construct(){
		parent::__construct();

		$this->load->model('frota_model', 'frota');
		$this->load->model('fabricantes_model', 'teste');
		$this->load->model('Mensagem_model');
	}

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	
	public function index(bool $status=NULL){
		$search = $this->input->post() ?? [];

        $data['status']      	= $status;
		$data['titulo'] 	 	= 'BVRC - Frota';
		$data['page'] 		 	= 'frota/index';
		$data['active_menu'] 	= 'frota';
		$data['frota']  	 	= $this->frota->getAll($search);
		$data['total_rows']  	= $this->frota->getCountAll($search);

		$fabMod 				= $this->getFabricantesModelos();
		$data_formulario     	= [
			'container_fluid' 	=> true,
			'cores' 			=> $fabMod['cores'],
			'fabricantes' 		=> $fabMod['fabricantes'],
			'modelos' 			=> $fabMod['modelos']
		];
		$data['formulario_automovel'] = $this->load->view('frota/formulario_automovel', $data_formulario, true);
		
		$this->load->view('html', $data);
	}

	/**
	 * [inserir description]
	 * @param  array  $dados_automovel [description]
	 * @return [type]                  [description]
	 */
	
	public function inserir(array $dados_automovel = []){
		$data['titulo'] 	 = 'BVRC - Inserir';
		$data['page'] 		 = 'frota/formulario_automovel';
		$data['active_menu'] = 'frota';

		$fabMod = $this->getFabricantesModelos();
		
		$data['cores']       = $fabMod['cores'];
		$data['fabricantes'] = $fabMod['fabricantes'];
		$data['modelos']     = $fabMod['modelos'];
		
		$this->load->view('html', $data);
	}

	/**
	 * [getFabricantesModelos description]
	 * @return [type] [description]
	 */
	
	private function getFabricantesModelos(): array{
		$temp = [];
		$this->load->model('cores_model');
		
		$temp['cores'] = $this->cores_model->getAll();
		$this->load->model('fabricantes_model');
		
		$temp['fabricantes'] = $this->fabricantes_model->getAll();
		$this->load->model('modelos_model');

		foreach($temp['fabricantes'] as $fab){
			$temp['modelos'][$fab['id']] = $this->modelos_model->getAll($fab['id']);
		}
		return $temp;
	}

	/**
	 * [editar description]
	 * @param  int    $id_automovel [description]
	 * @return [type]               [description]
	 */
	
	public function editar(int $id_automovel){
		$data['titulo'] 	 = 'BVRC - Editar';
		$data['page'] 	 	 = 'frota/editar';
		$data['active_menu'] = 'frota';

		$this->load->view('html', $data);
	}

	/**
	 * [remover description]
	 * @param  int    $id_automovel [description]
	 * @return [type]               [description]
	 */

    public function remover(int $id_automovel){
        $data['titulo']			= 'BVRC - Remover';
        $data['page']			= 'frota/remover';
        $data['active_menu']	= 'frota';
        $data['id_automovel']	= $id_automovel;
        $data['matricula']		= $this->frota->getMatricula($id_automovel);
        if( $this->input->post() ){
            $status= $this->frota->deleteAutomovel($id_automovel);
            $this->index($status);
        } else {
            $data['page']		= 'frota/remover';
        }
        $this->load->view('html', $data);
    }

    /**
     * [pesquisa description]
     * @return [type] [description]
     */
    
	public function pesquisa(){
		$data['titulo'] 	 = 'BVRC - Remover';
		$data['page'] 		 = 'frota/pesquisa';
		$data['active_menu'] = '';

		$this->load->view('html', $data);
	}

	/**
	 * [listarEmail description]
	 * @param  int|null $id [description]
	 * @return [type]       [description]
	 */
	
    public function listarEmail(int $id=NULL){
        $data['titulo']			= 'BVRC - Remover';
        $data['page']			= 'frota/tableEmail';
        $data['active_menu'] 	= 'listaremail';
        $data['email']    		= $this->Mensagem_model->getMessages();
        if( $this->input->post() ){
        	$data['status']		= $this->Mensagem_model->deleteMessage($id);
        	$data['email']    	= $this->Mensagem_model->getMessages();
        }
    	$this->load->view('html', $data);
	}
}