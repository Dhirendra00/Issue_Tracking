<?php
/**
 * 
 */
class user_pages extends CI_Controller
{
	
	public function dashboard()
	{
		if (!file_exists(APPPATH.'views/pages/user_dashboard.php')) {
			show_404();
		}
		$data['title']=ucfirst('Dashboard');
		$data['issue']=$this->model->get_issue();
		// $data['issue']=$this->model->get_category();
		
		// print_r($data['issue']);
		// $this->load->view('template/user_header');
	$this->load->view('pages/user_dashboard', $data);
		$this->load->view('template/footer');
			
	}
		public function add_issue(){
		// $slug = url_title($this->input->post('title'));
		$data['title']=ucfirst('Dashboard');
		$data = array(
			'ticket'=>$this->input->post('ticket'),
			'issue'=>$this->input->post('issue'),
			'date'=>$this->input->post('date'),
			'description'=>$this->input->post('description')
			
		);
		// return $this->db->insert('issue',$data);
		$this->model->add_issue($data);
	redirect('user_dashboard');

	}

	}
?>