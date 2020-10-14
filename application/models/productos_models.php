<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos extends CI_Controller {

	public function getProductos(){
		$r = $this->db->query("SELECT * from productos");
		return $r->result();
	}
}