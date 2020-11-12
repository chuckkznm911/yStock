<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proveedores extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('condiciones_iva');
		$this->load->model('clientes_model');
	}

	public function index(){
		

		$this->load->view('layouts/headerLTE');
		$this->load->view('layouts/asideLTE');
		$this->load->view('admin/proveedores/proveedores');
		$this->load->view('layouts/footerLTE');
	}
}