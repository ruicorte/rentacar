<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Frota_model extends CI_Model {

//	private $pdo;

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getAll(array $search = []){

		if($search['modelo_id'] ?? false){
			$this->db->where('modelo_id', $search['modelo_id']);
		}	
		if($search['cor_id'] ?? false){
			$this->db->where('cor_id', $search['cor_id']);
		}	
		if($search['matricula'] ?? false){
			$this->db->where('matricula', $search['matricula']);
		}	
		$this->db
		->select("aut.id, aut.disponibilidade, aut.matricula, cores.nome as cor, mod.nome as modelo, fab.nome as fabricante")
		->from('automoveis as aut')
		->join('cores', 'aut.cor_id=cores.id')
		->join('modelos as mod', 'mod.id=aut.modelo_id')
		->join('fabricantes as fab', 'mod.id=fab.id')
		->group_by('aut.id');
//		->limit($limit, $offset);
		return $this->db->get()->result();
/*
		$this->db->where('id', $id);
		$this->db->select('id, modelo_id, cor_id, disponibilidade, matricula');
		$this->db->from('automoveis');
		return $this->db->get()->result_array();
		*/
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