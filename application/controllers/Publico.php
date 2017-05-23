<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	
	public function index()
	{
		$data['teste'] = 'isto é um teste';
		$this->load->view('publico');
	}
}
