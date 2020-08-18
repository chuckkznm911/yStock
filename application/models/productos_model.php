<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos_model extends CI_Model {

	public function getProductos(){
		$this->db->select("p.*, c.nombre as categoria");
		$this->db->from("productos p");
		$this->db->join("categorias c", "p.categoria_id = c.id");
		$this->db->where("p.estado", "1");
		$resultado = $this->db->get();
		return $resultado->result();
	}

	public function getProducto($id){
		$this->db->where("id", $id);
		$resultado = $this->db->get("productos");
		return $resultado->row();
	}

	public function insertProductos($data){
		$this->db->insert("productos", $data);
	}

	public function update($id, $data){
		$this->db->where("id", $id);
		$this->db->update("productos", $data);
	}

	public function delete($id){
		$this->db->where("id", $id);
		$this->db->delete("productos");
	}

}