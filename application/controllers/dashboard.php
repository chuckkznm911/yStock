<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/content');
		$this->load->view('layouts/footer');
	}
}