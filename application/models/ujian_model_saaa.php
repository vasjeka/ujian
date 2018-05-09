<?php 
class Ujian_model extends CI_Model{
		public function __consstruct(){
			$this->load->database();
		}

		public function get_matpel(){
			$query = $this->db->get('matpel');
			return $query->result_array();
		}
	function get_matpel($id)
	{
		//select produk berdasarkan id yang dimiliki
	}

	function tambah_matpel($data)
	{
		//untuk insert data ke database
	}

	function update_matpel($id)
	{
		//update produk berdasarkan id
	}

	function delete_matpelt($id)
	{
		//delete produk berdasarkan id
	}		
	}
 ?>