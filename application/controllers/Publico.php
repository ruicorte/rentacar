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
<<<<<<< HEAD
$data['active_menu'] = 'sobre';
=======
		$data['titulo'] = 'BVRC - Sobre a Empresa';
		$data['page'] = 'publico/sobre';
		$this->load->view('html', $data);
>>>>>>> 32dde4b09d1f43b65c69b96b5189115541b2434d
	}

	/**
	 * página de contacto que inclui um formulário de contacto (codeigniter email)
	 * @return [type] [description]
	 */
	public function contacto(){
<<<<<<< HEAD
$data['active_menu'] = 'contacto';
=======
		$data['titulo'] = 'BVRC - Contacto';
		$data['page'] = 'publico/contacto';
		$this->load->view('html', $data);
>>>>>>> 32dde4b09d1f43b65c69b96b5189115541b2434d
	}
}
