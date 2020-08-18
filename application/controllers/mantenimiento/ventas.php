<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ventas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("ventas_model");
		$this->load->model("clientes_model");
		$this->load->model("productos_model");
		$this->load->model("dashboard_model");
	}

	public function index(){
		$data = array(
			'license' => $this->dashboard_model->getLicenseTime(),
			'total' => $this->ventas_model->getTotal(),
			'infoComprobante' => $this->ventas_model->getVenta(),
			'cantVentas' => $this->ventas_model->getRowVentas()
		);

		

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vista_nueva_venta/listVentas", $data);
		$this->load->view("admin/navRight", $data);
		$this->load->view("layouts/footer");


	}

	public function add(){
		$data = array(
			'tipoComprobante' => $this->ventas_model->getComprobantes(),
			'clientes' => $this->clientes_model->getClientes()
		);
		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vista_nueva_venta/add", $data);
		$this->load->view("layouts/footer");
	}

	public function getProductos(){
		$valor = $this->input->post("valor");
		$clientes = $this->ventas_model->getProductos($valor);
		echo json_encode($clientes);
	}

	public function store(){
							$fecha = $_POST['fecha'];
                            $subtotal = $_POST['subtotal'];
                            $total = $_POST['total'];
                            $idcomprobante = $_POST['idcomprobante'];
                            $idCliente = $_POST['idCliente'];
                            $num_documento = $_POST['dniCurrentUser'];
                            $serie = $_POST['serie'];

		$data = array(
			'fecha' => $fecha,
			'subtotal' => $subtotal,
			'total' => $total,
			'tipo_comprobante_id' => $idcomprobante,
			'cliente_id' => $idCliente,
			'num_documento' => $num_documento,
			'serie' => $serie
		);

		if($this->ventas_model->save($data)){
			echo "1";
		}else{
			echo "0";
		}

	}

	public function getTotal(){

		$total = array(
			'total' => $this->ventas_model->getTotal(),
		);
		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/dashboard", $total);
		$this->load->view("layouts/footer");
	}
}
