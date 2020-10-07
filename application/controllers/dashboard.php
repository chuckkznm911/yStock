<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index(){
		$this->load->view('layouts/headerLTE');
		$this->load->view('layouts/asideLTE');
		$this->load->view('layouts/contentLTE');
		$this->load->view('layouts/footerLTE');
	}
}

?>