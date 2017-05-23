<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		return $this->db->get('modelos')->result_array();
	}
}