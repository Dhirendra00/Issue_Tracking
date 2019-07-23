<?php
class model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_issue($id = false){
		if ($id== FALSE) {
			$query = $this->db->get('issue');
			return $query->result_array();
		}
		$query = $this->db->get_where('issue',$id = array('id' => $id));
		return $query->row_array();
	}
	public function add_issue($data){
		return $this->db->insert('issue',$data);
		
	}
		public function get_notification($id = false){
		if ($id== FALSE) {
			$query = $this->db->get('notification');
			return $query->result_array();
		}
		$query = $this->db->get_where('notification',$id = array('id' => $id));
		return $query->row_array();
	}
	public function add_notification($data){
		return $this->db->insert('notification',$data);
	}

		public function get_category($id = false){
		if ($id== FALSE) {
			$query = $this->db->get('category');
			return $query->result_array();
		}
		$query = $this->db->get_where('category',$id = array('id' => $id));
		return $query->row_array();
	}
	public function add_category($data){
		return $this->db->insert('category',$data);
	}
	
}
?>