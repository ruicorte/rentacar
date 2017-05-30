<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Frota_model extends CI_Model {

	/**
	 * [__construct description]
	 */
	
	public function __construct() {
		parent::__construct();

		$this->load->database();
	}

	/**
	 * [getAll description]
	 * @param  array  $search [description]
	 * @return [type]         [description]
	 */
	
	public function getAll(array $search = [], int $offset = 0 , int $limit = ITEMS_PER_PAGE) {
		$criterio_search = $search['criterio_search'] ?? false;
		$termo_search    = $search['termo_search'] ?? false;
		
		if($criterio_search && $termo_search) {
			switch($criterio_search) {
				case "modelo":
					$this->db->where('m.nome LIKE', '%'.$termo_search.'%');
					break;
				case "fabricante":
					$this->db->where('f.nome LIKE', '%'.$termo_search.'%');
					break;
				case "matricula":
					$this->db->where('a.matricula LIKE', '%'.$termo_search.'%');
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
		$this->db->limit($limit,$offset);
		return $this->db->get()->result();
	}
	/**
	 * [getCountAll description]
	 * @param  array  $search [description]
	 * @return [type]         [description]
	 */
	
	public function carById(int $id) {
		$this->db
		->select("a.id automovel_id, a.disponibilidade, a.matricula, c.id cor_id, m.id modelo_id, f.id fabricante_id")
		->from('automoveis a')
		->from('cores c')
		->from('modelos m')
		->from('fabricantes f')
		->where('a.cor_id=c.id')
		->where('a.modelo_id=m.id')
		->where('m.fabricante_id=f.id')
		->where('a.id='.$id)
		->order_by('a.id DESC');
		return $this->db->get()->result_array()[0] ?? [];
	}

	public function getCountAll(array $search = []) {
		$criterio_search = $search['criterio_search'] ?? false;
		$termo_search    = $search['termo_search'] ?? false;
		if($criterio_search && $termo_search) {
			switch($criterio_search) {
				case "modelo":
					$this->db->where('m.nome LIKE', '%'.$termo_search.'%');
					break;
				case "fabricante":
					$this->db->where('f.nome LIKE', '%'.$termo_search.'%');
					break;
				case "matricula":
					$this->db->where('a.matricula LIKE', '%'.$termo_search.'%');
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
	
	public function getMatricula(int $id) {
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
	
	public function deleteAutomovel(int $id) {
		return $this->db->delete('automoveis', array('id' => $id));
	}

	/**
	 * [insereAutomovel description]
	 * @param  array  $carData [description]
	 * @return [type]          [description]
	 */
	
	public function insereAutomovel(array $carData): bool {
		$data = array(
				'modelo_id' 	  => $carData['modelo_id'],
				'cor_id' 		  => $carData['cor_id'],
				'matricula' 	  => $carData['matricula'],
				'disponibilidade' => $carData['disponivel']
		);
		return $this->db->insert('automoveis', $data);
	}

	/**
	 * [insereAutomovel description]
	 * @param  array  $carData [description]
	 * @return [type]          [description]
	 */
	
	public function editaAutomovel(array $carData): bool {
		$this->db->where('id',$carData['id']);
		$data = array(
			'modelo_id' 	  => $carData['modelo_id'],
			'cor_id' 		  => $carData['cor_id'],
			'matricula' 	  => $carData['matricula'],
			'disponibilidade' => $carData['disponivel']
		);
		return $this->db->update('automoveis', $data);
	}
}