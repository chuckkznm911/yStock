<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('categorias_model');
		$this->load->model('ventas_model');
		$this->load->model('productos_model');
		$this->load->model('dashboard_model');
	}

	public function index(){
		$data = array(
			'producto' => $this->productos_model->getProductos(),
			'total' => $this->ventas_model->getTotal(),
			'cantVentas' => $this->ventas_model->getRowVentas(),
			'license' => $this->dashboard_model->getLicenseTime()
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/productos/listProductos", $data);
		$this->load->view("admin/navRight", $data);
		$this->load->view("layouts/footer");
	}

	public function addProd(){
		$data = array(
			'categorias' => $this->categorias_model->getCategorias(),
		);
		$this->load->view("admin/productos/addProductos", $data);
	}

	public function confirmAddProd(){
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precio = $this->input->post("precio");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");

		$this->form_validation->set_rules("codigo", "codigo", "required|is_unique[productos.codigo]");

		if( $this->form_validation->run() ){

			if($descripcion!=""){
				$data = array(
					'codigo' => $codigo,
					'nombre' => $nombre,
					'descripcion' => $descripcion,
					'precio' => $precio,
					'stock' => $stock,
					'categoria_id' => $categoria,
					'estado' => "1"
				);
			}else{
				$data = array(
					'codigo' => $codigo,
					'nombre' => $nombre,
					'precio' => $precio,
					'stock' => $stock,
					'categoria_id' => $categoria,
					'estado' => "1"
				);
			}

			$this->productos_model->insertProductos($data);
			echo "1";
		}else{
			echo "0";
		}
			
	}

	public function edit($id){
		$data = array(
			'producto' => $this->productos_model->getProducto($id),
			'categorias' => $this->categorias_model->getCategorias()
		);

		$this->load->view("admin/productos/editProductos",$data);
	}

	public function confirmEdit($id){
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precio = $this->input->post("precio");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");

		$data = array(
			'codigo' => $codigo,
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'precio' => $precio,
			'stock' => $stock,
			'categoria_id' => $categoria
		);

		$this->productos_model->update($id, $data);

	}

	public function delete($id){
		$this->productos_model->delete($id);
	}



}