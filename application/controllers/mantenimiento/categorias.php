<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categorias extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('categorias_model');
		$this->load->model('dashboard_model');
		$this->load->model('ventas_model');
	}

	public function index()
	{
		$data = array(
			'categorias' => $this->categorias_model->getCategorias(),
			'total' => $this->ventas_model->getTotal(),
			'cantVentas' => $this->ventas_model->getRowVentas(),
			'license' => $this->dashboard_model->getLicenseTime()
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/list', $data);
		$this->load->view('admin/navRight.php', $data);
		$this->load->view('layouts/footer');

	}

	public function add(){
		$this->load->view('admin/categorias/add');
	}

	public function store(){
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$this->form_validation->set_rules("nombre", "nombre", "required|is_unique[categorias.nombre]");

		if($this->form_validation->run()){
		
			$data = array(
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'estado' => "1"
			);

			if($this->categorias_model->save($data)){
				echo "1";
			}else{
				$this->session->set_flashdata("error", "error al cargar los datos");
			}
			

		}else{
			$this->add();
		}

	}

	public function edit($id){
		$data = array(
			'categoria' => $this->categorias_model->getCategoria($id),
		);

		$this->load->view('admin/categorias/edit',$data);
		
	}

	public function update(){
		$idCategoria = $this->input->post("idCategoria");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$this->form_validation->set_rules("nombre", "nombre", "required|is_unique[categorias.nombre]");

		if( $this->form_validation->run() ){
			$data = array(
				'nombre' => $nombre,
				'descripcion' => $descripcion
			);

			$this->categorias_model->update($idCategoria, $data);
			echo "true";
		}else{
			echo "false";
		}

	}

	public function view($id){
		
		$data = array(
			'categoria' => $this->categorias_model->getCategoria($id),
		);

		$this->load->view("admin/categorias/view",$data);
	}

	public function delete($id){
		$this->categorias_model->delete($id);
	}

	public function getCategoria(){
		$data = array(
			'categoria' => $this->categorias_model->getCategorias(),
		);

		$validation = array(
				'state' => false,
		);

		if($data['categoria']==""){
			$validation['state']=true;
		}

		$json = json_encode($validation);
		echo $json;

	}

}

