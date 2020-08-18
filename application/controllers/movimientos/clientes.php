<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes extends CI_Controller {

	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/navBar');
		$this->load->view('admin/clientes/clientes');
		$this->load->view('layouts/footer');
	}
}