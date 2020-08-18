<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("clientes_model");
		$this->load->model("dashboard_model");
		$this->load->model("ventas_model");
	}

	public function index(){

		$data = array(
			'clientes' => $this->clientes_model->getClientes(),
			'total' => $this->ventas_model->getTotal(),
			'cantVentas' => $this->ventas_model->getRowVentas(),
			'license' => $this->dashboard_model->getLicenseTime()
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/clientes/listClientes', $data);
		$this->load->view('admin/navRight', $data);
		$this->load->view('layouts/footer');

	}

	public function add(){
		$this->load->view('admin/clientes/addCliente');
	}

	public function addCliente(){

		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");

		$this->form_validation->set_rules("telefono", "telefono", "required|is_unique[clientes.telefono]");
		$this->form_validation->set_rules("direccion", "direccion", "required|is_unique[clientes.direccion]");

		if( $this->form_validation->run() ){

			$data = array(
				'nombres' => $nombres,
				'apellidos' => $apellidos,
				'telefono' => $telefono,
				'direccion' => $direccion,
				'estado' => "1"
			);

			$this->clientes_model->addCliente($data);
			echo "1";
		}else{
			echo "0";
		}

	}

	public function edit($id){
		$data = array(
			'cliente' => $this->clientes_model->getCliente($id),
		);

		$this->load->view('admin/clientes/editCliente',$data);

	}

	public function update($id){
		$nombres = $this->input->post("nombres");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");

			$data = array(
				'nombre' => $nombres,
				'telefono' => $telefono,
				'direccion' => $direccion
			);

		$this->clientes_model->update($id,$data);
		
	}

	public function delete($id){
		$this->clientes_model->delete($id);
	}

}