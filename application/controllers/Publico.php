<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Mensagem_model');
		
	}
	
	public function index()	{		
		$data['titulo'] 	 = 'BVRC - Início';
		$data['page'] 		 = 'publico/index';
		$data['active_menu'] = 'index';

		$this->load->view('html', $data);
	}

	/**
	 * página de informações gerais
	 * @return [type] [description]
	 */
	
	public function sobre(){
		$data['active_menu'] = 'sobre';
		$data['titulo']		 = 'BVRC - Sobre a Empresa';
		$data['page']		 = 'publico/sobre';

		$this->load->view('html', $data);
	}

	/**
	 * página de contacto que inclui um formulário de contacto (codeigniter email)
	 * @return [type] [description]
	 */
	
	public function contacto(){
		$this->load->library('form_validation');
		$this->load->helper('form');

		$config = array(
			array(
				'field' => 'nome_email',
				'label' => 'Nome',
				'rules' => 'required|alpha_numeric_spaces|max_length[50]',
				'errors'=> array(
								// o %s e para escrever o label
								'required'			  => 'É obrigatorio indicar um %s',
								//erro se existe caracteres especiais
								'alpha_numeric_spaces'=>'contem caracteres invalidos no %s',
								//erro se excede o tamanho maximo
								'max_length'          => 'Excedeu o maximo de 50 caracteres no %s'
								)
				),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|max_length[50]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]',
				'errors'=> array(
								'required'   => 'É obrigatorio indicar um %s',
								'regex_match'=> 'introduza um %s válido',
								'max_length' => 'Excedeu o maximo de 50 caracteres no %s'
								)
				),
			array(
				'field' => 'mensagem_email',
				'label' => 'Mensagem',
				'rules' => 'required|alpha_numeric_spaces|max_length[500]',
				'errors'=> array(
					 			'required'			  => 'É obrigatorio indicar um %s',
								'alpha_numeric_spaces'=>'contem caracteres invalidos na %s',
								'max_length'		  => 'Excedeu o maximo de 500 caracteres na %s'
								)
				)
		);

		$this->form_validation->set_rules($config);
		
		$data['titulo']		 = 'BVRC - Contacto';
		$data['page'] 		 = 'publico/contacto';
		$data['active_menu'] = 'contacto';
		$data['messagePost'] = $this->input->post();
		
		if ($this->form_validation->run() == FALSE){
            $this->load->view('html', $data);//loads the main view
        } else {
	            $status = $this->Mensagem_model->createNewMessage($this->input->post());
	            $_SESSION['formStatus'] = CreateToDbCheckMessage($status);
	            $data['messagePost'] = array('nome_email' => '',
	                    			   'email' => '',
	                    			   'mensagem_email' => '');
	            $data['content'] 	 = "Books/formsuccess";//content to load
	            
	            $this->load->view('html', $data);//loads the main view
        }
	}
}