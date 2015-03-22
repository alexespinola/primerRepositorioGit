<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock_model extends CI_Model {



	public function get_stock($total_row = true,  $cuantos = '99999999999', $desde = '0'){
		
		if($this->input->get('buscar') != '' and $this->input->get('termino') != ''){

			if(is_numeric( $this->input->get('termino')) and $this->input->get('buscar') == 'id' or is_numeric( $this->input->get('termino')) and $this->input->get('buscar') == 'stock'){
				$this->db->where($this->input->get('buscar'), $this->input->get('termino'));
			}else{

				$this->db->like('LOWER('.$this->input->get('buscar').')', strtolower($this->input->get('termino')));
			}

		}

		if($this->input->get('orden') != ''){
			$this->db->order_by($this->input->get('orden'), $this->input->get('orientacion'));	
			
		}

		if($total_row){
			//retorna el total de filas para la paginación
			$res = $this->db->get('almacen_stock')->num_rows();
		}else{
			//retorna el objecto ci con los articulos
			$res = $this->db->get('almacen_stock', $cuantos,  $desde);
		}
		return $res;
	}



	public function eliminar_stock($id){

		$this->db->where('id', $id);
		$this->db->delete('almacen_stock');
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}


	public function save($datainsert){

		$this->db->insert('almacen_stock', $datainsert);

		return $this->db->insert_id();

	}

	public function update($id, $dataupdate){

		$this->db->where('id', $id);
		$this->db->update('almacen_stock', $dataupdate);

		return true;

	}



	public function get_articulo($id){

		$this->db->where('id', $id);
		$res = $this->db->get('almacen_stock', 1 , 0);
		return $res;

	}

	

}

/* End of file stock_model.php */
/* Location: ./application/models/stock_model.php */