<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Autores_model extends CI_Model {

	private $pdo;

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getAll(){
		$this->db->where('id', $id);
		$this->db->select('id, modelo_id, cor_id, disponibilidade, matricula');
		$this->db->from('automoveis');
		return $this->db->get()->result_array();
	}
/*
	public function getAutoresByCountryARBuilder($paises_id){
		$this->db->where('paises_id', $paises_id);
//		$this->db->or_where('paises_id', $paises_id);
		$this->db->select('nome, data_nascimento, paises_id');
		$this->db->from('autores');
		$this->db->order_by('nome', 'ASC');
//		$this->db->limit(2,2);
//		$this->db->like('nome', "i");
//		$this->db->not_like('nome', "e");
		return $this->db->get()->result_array();
	}

	public function createAutor($nome, $data_nascimento, $id_pais){
		$data = array(
			'nome' => $nome,
			'data_nascimento' => $data_nascimento,
			'id_pais' => $id_pais
		);
		$this->db->insert('autores', $data);
	}

	public function createBatch($data){
		return $this->db->insert_batch('autores', $data);
	}

	public function createWithSet($nome, $data_nascimento, $paises_id){
		$this->db->set('nome',$nome);
		$this->db->set('data_nascimento',$data_nascimento);
		$this->db->set('paises_id',$paises_id);
		return $this->db->insert('autores');
	}

	public function updateAutor($id, $data){
		$this->db->where('id',$id);
		return $this->db->update('autores', $data);
	}

	public function apagaAutor($id){
		$this->db->delete('autores',array('id'=>$id));
		return $this->db->affected_rows();
	}
	*/
}