<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {


	function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in()){
		redirect('auth');
		}
	}



	public function index()
	{	
		

		$this->load->view('inicio/inicio_view');


	}


	





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */