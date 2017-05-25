<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem_model extends CI_Model{
	private $pdo;
	public function __construct()
	{
		$this->load->database();

	}

	/**
	 * 
	 * @return  object contem as mensagens de contacto
	 */

	public function getMessages() {
		$this->db->select('id,nome,email,mensagem,date');
		$this->db->from('email');
		return $this->db->get()->result();
	}

	public function getMessagescount():int {
		$this->db->select('id,nome,email,mensagem,date');
		$this->db->from('email');
	  //$this->db->group_by('autores.id');
		return $this->db->count_all_results();
	}

	public function createNewMessage($data) {
	 	$message = array(
	 					'nome'     => $data['nome_email'] ,
	 					'email'    => $data['email'],
	 					'mensagem' => $data['mensagem_email']);
	 	$this->db->insert('email',$message);
	 	return $this->db->insert_id();
	}

	public function deleteMessage(int $id)
	{
		return $this->db->delete('email', array('id' => $id));

	}

}
