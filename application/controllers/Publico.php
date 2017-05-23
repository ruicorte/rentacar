<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}
	
	public function index()
	{		
		$data['titulo'] = 'BVRC - Início';
		$data['page'] = 'publico/publico';
		$data['active_menu'] = 'index';
		$this->load->view('html', $data);
	}

	/**
	 * página de informações gerais
	 * @return [type] [description]
	 */
	public function sobre(){

$data['active_menu'] = 'contacto';

		$data['titulo'] = 'BVRC - Contacto';
		$data['page'] = 'publico/contacto';
		$this->load->view('html', $data);
	}
}
