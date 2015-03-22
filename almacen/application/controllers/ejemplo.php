<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ejemplo extends CI_Controller {


	public function __construct()
	{
        parent::__construct();
	}


	public function index()
	{	


		$data['usuarios'] = $this->db->get('ion_users');

		$this->load->view('ejemplo/ejemplo_view', $data);


	}


	public function template(){

		$this->load->view('ejemplo/template_general');

	}


	public function popular(){

	 	set_time_limit(0);

		for ($i=0; $i < 5000; $i++) { 

			$stock = rand(1, 20);

			$data = array(

				'nombre' => $this->get_nombre(),
				'codigo' => $this->get_codigo(),
				'descripcion' =>  $this->get_nombre(),
				'stock' => $stock

			);

			$this->db->insert('almacen_stock', $data);


		}
		

		echo "ok";

	}


	private function get_nombre(){


		$clave = rand(1, 5);


		switch($clave){
			case 1:
			$nombre = 'Rueda tren';
			break;
			case 2:
			$nombre = 'Boogie';
			break;
			case 3:
			$nombre = 'AA acondicionado';
			break;
			case 4:
			$nombre = 'Ventana';
			break;
			case 5:
			$nombre = 'Puerta';
			break;

		}

		return $nombre;

	}



	private function get_codigo(){


		$clave = rand(1, 5);


		switch($clave){
			case 1:
			$nombre = 'A12345';
			break;
			case 2:
			$nombre = 'A12';
			break;
			case 3:
			$nombre = 'A234234';
			break;
			case 4:
			$nombre = 'G455';
			break;
			case 5:
			$nombre = 'O3654';
			break;

		}

		return $nombre;

	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */