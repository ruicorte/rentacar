<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}
	
	public function index()
	{		
		$data['titulo'] = 'BVRC - home';
		$data['page'] = 'publico/publico';
		$this->load->view('html', $data);
	}

	/**
	 * página de informações gerais
	 * @return [type] [description]
	 */
	public function sobre(){

	}

	/**
	 * página de contacto que inclui um formulário de contacto (codeigniter email)
	 * @return [type] [description]
	 */
	public function contacto(){

	}
}
