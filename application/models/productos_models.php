<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos_models extends CI_Model {
	public function getProduchtos(){
		$r = $this ->db->query("SELECT * FROM `productos`");
	return $r->result();
	} 


}
