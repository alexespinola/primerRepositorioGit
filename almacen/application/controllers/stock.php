<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller {


	function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in()){
		redirect('auth');
		}

		$this->load->model('stock_model');
	}



	public function index()
	{	

		$this->load->library('pagination');

		$config['base_url'] = base_url().'stock';
		$config['total_rows'] = $this->stock_model->get_stock(true);
		$config['per_page'] = '20'; 
		$config['uri_segment'] = 2;
		$config['suffix'] = '?'.$this->input->server('QUERY_STRING'); 
		$config['first_link'] = 'Primeros';
		$config['last_link'] = 'Últimos';
		
		$this->pagination->initialize($config);

		$data['stock'] = $this->stock_model->get_stock(false, $config['per_page'], $this->uri->segment(2));		

		$this->load->view('stock/stock_view', $data);

	}


	
	public function agregar(){


		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[255]');
		$this->form_validation->set_rules('codigo', 'Código', 'required|max_length[11]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'required|max_length[255]');
		$this->form_validation->set_rules('stock', 'Stock', 'required|integer');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('stock/agregar_stock_view');
		}
		else
		{
			

			$datainsert['nombre'] = $this->input->post('nombre');
			$datainsert['codigo'] = $this->input->post('codigo');
			$datainsert['descripcion'] = $this->input->post('descripcion');
			$datainsert['stock'] = $this->input->post('stock');

			$id_nuevo_articulo = $this->stock_model->save($datainsert);

			//redirect('stock?msj=Registro ingresado');

			redirect('stock/editar/'.$id_nuevo_articulo.'?msj=Nuevo Articulo Agregado');


		}



	}




	public function editar($id){

		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[255]');
		$this->form_validation->set_rules('codigo', 'Código', 'required|max_length[11]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'required|max_length[255]');
		$this->form_validation->set_rules('stock', 'Stock', 'required|integer');
		
		if ($this->form_validation->run() == FALSE)
		{

			$data['articulo']  = $this->stock_model->get_articulo($id);

			$this->load->view('stock/editar_stock_view', $data);
		}
		else
		{
			

			$dataupdate['nombre'] = $this->input->post('nombre');
			$dataupdate['codigo'] = $this->input->post('codigo');
			$dataupdate['descripcion'] = $this->input->post('descripcion');
			$dataupdate['stock'] = $this->input->post('stock');

			$this->stock_model->update($id, $dataupdate);


			redirect('stock/editar/'.$id.'?msj= Articulo Editado');


		}
	}

	public function eliminar($id){

		if($this->ion_auth->is_admin()){

			if($this->stock_model->eliminar_stock($id)){
				redirect('stock?msj=Se elimino el registro '.$id);
			}else{
				redirect('stock?msj=No se pudo eliminar el registro '.$id.' o no existe');
			}

		}else{
			show_404();
		}
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */