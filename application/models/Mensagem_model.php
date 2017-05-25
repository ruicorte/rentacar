<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem_model extends CI_Model{
	private $pdo;
	public function __construct()
	{
		$this->load->database();

	}

	/**
	 * getMessages carrega todas as mensagens a base de dados
	 * @return  object contem as mensagens de contacto
	 */

	public function getMessages() {
		$this->db->select('id,nome,email,mensagem,date');
		$this->db->from('email');
		return $this->db->get()->result();
	}

/**
	 * getMessagescount numero de mensagens carregadas da base de dados
	 * @return  int contem  numero de mensagens carregadas
	 */
	public function getMessagescount():int {
		$this->db->select('id,nome,email,mensagem,date');
		$this->db->from('email');
	  //$this->db->group_by('autores.id');
		return $this->db->count_all_results();
	}

/**
	 * createNewMessage faz o insert de uma nova mensagem
	 * array $data contem os dados da nova mensagem
	 * @return  bool do insert da mensagem
	 */
	public function createNewMessage(array $data) {
	 	$message = array(
	 					'nome'     => $data['nome_email'] ,
	 					'email'    => $data['email'],
	 					'mensagem' => $data['mensagem_email']);
	 	return $this->db->insert('email',$message);
	}

/**
	 * deleteMessage faz o delete da mensagem pelo seu id
	 * int $id contem o id da mensagem a apagar
	 * @return  bool do insert da mensagem
	 */
	public function deleteMessage(int $id)
	{
		return $this->db->delete('email', array('id' => $id));

	}

}
