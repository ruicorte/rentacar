<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Frota_model extends CI_Model {

	/**
	 * [__construct description]
	 */
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	/**
	 * [getAll description]
	 * @param  array  $search [description]
	 * @return [type]         [description]
	 */
	public function getAll(array $search = []){
		$criterio_search = $search['criterio_search'] ?? false;
		$termo_search    = $search['termo_search'] ?? false;
		if($criterio_search && $termo_search){
			switch($criterio_search){
				case "modelo":
					$this->db->where('m.nome LIKE', '%'.$termo_search.'%');
					break;
				case "fabricante":
					$this->db->where('f.nome LIKE', '%'.$termo_search.'%');
					break;
				case "matricula":
					$this->db->where('a.matricula', $termo_search);
					break;
			}
		}	
		$this->db
		->select("a.id id, a.disponibilidade, a.matricula, c.nome cor, m.nome modelo, f.nome fabricante")
		->from('automoveis a')
		->from('cores c')
		->from('modelos m')
		->from('fabricantes f')
		->where('a.cor_id=c.id')
		->where('a.modelo_id=m.id')
		->where('m.fabricante_id=f.id')
		->order_by('a.id DESC');
		return $this->db->get()->result();
	}

	/**
	 * [getCountAll description]
	 * @param  array  $search [description]
	 * @return [type]         [description]
	 */
	public function getCountAll(array $search = []){
		$criterio_search = $search['criterio_search'] ?? false;
		$termo_search    = $search['termo_search'] ?? false;
		if($criterio_search && $termo_search){
			switch($criterio_search){
				case "modelo":
					$this->db->where('m.nome LIKE', '%'.$termo_search.'%');
					break;
				case "fabricante":
					$this->db->where('f.nome LIKE', '%'.$termo_search.'%');
					break;
				case "matricula":
					$this->db->where('a.matricula', $termo_search);
					break;
			}
		}	
		$this->db
		->select("a.id id, a.disponibilidade, a.matricula, c.nome cor, m.nome modelo, f.nome fabricante")
		->from('automoveis a')
		->from('cores c')
		->from('modelos m')
		->from('fabricantes f')
		->where('a.cor_id=c.id')
		->where('a.modelo_id=m.id')
		->where('m.fabricante_id=f.id');
		return $this->db->count_all_results();
	}

	/**
	 * [getMatricula description]
	 * @param  int    $id [description]
	 * @return [type]     [description]
	 */
	public function getMatricula(int $id)
	{
		$this->db
		->select('id,matricula')
		->from('automoveis')
		->where('id',$id);
		return $this->db->get()->row();
	}

	/**
	 * [deleteAutomovel description]
	 * @param  int    $id [description]
	 * @return [type]     [description]
	 */
	public function deleteAutomovel(int $id){
		return $this->db->delete('automoveis', array('id' => $id));
	}

	/**
	 * [insereAutomovel description]
	 * @param  array  $carData [description]
	 * @return [type]          [description]
	 */
	public function insereAutomovel(array $carData): bool{
		$data = array(
			'modelo_id' => $carData['modelo_id'],
			'cor_id' => $carData['cor_id'],
			'matricula' => $carData['matricula'],
			'disponibilidade' => $carData['disponivel']
		);
		$this->db->insert('automoveis', $data);
		return $this->db->last_insert_id() > 0;
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