<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes_model extends CI_Model {

	public function getClientes(){
		$this->db->where("estado", "1");
		$resultados = $this->db->get("clientes");
		return $resultados->result();
	}

	public function getCliente($id){
		$this->db->where("id", $id);
		$result = $this->db->get("clientes");
		return $result->row();
	}

	public function addCliente($data){
		$this->db->insert("clientes", $data);

	}

	public function update($id, $data){
		$this->db->where("id", $id);
		$this->db->update("clientes", $data);
		return true;
	}

	public function delete($id){
		$this->db->where("id", $id);
		$this->db->delete("clientes");
	}
	
}