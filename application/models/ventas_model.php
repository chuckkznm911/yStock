<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ventas_model extends CI_Model {

	public function getComprobantes(){
		$resultados = $this->db->get("tipo_comprobante");
		return $resultados->result();
	}

	public function getProductos($valor){
		$this->db->select("id,codigo,nombre as label,precio,stock");
		$this->db->from("productos");
		$this->db->like("nombre", $valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function save($data){
		$this->db->insert("ventas", $data);
		return true;
	}

	public function getTotal(){
		$this->db->select("total");
		$this->db->from("ventas");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getVenta(){
		$this->db->select("v.*, tc.nombre as tipo_comprobante, ci.nombre as clientes");
		$this->db->from("ventas v");
		$this->db->join("tipo_comprobante tc", "v.tipo_comprobante_id = tc.id");
		$this->db->join("clientes ci", "v.cliente_id = ci.id");
		$resultado = $this->db->get();
		return $resultado->result();
	}

	public function getRowVentas(){
		$this->db->select("*");
		$this->db->from("ventas");
		$resultado = $this->db->get();
		return $resultado->num_rows();
	}

}