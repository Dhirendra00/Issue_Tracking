<?php
/**
 * 
 */
class Pages extends CI_Controller
{
	
	public function view($page='home')
	{
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}
		$data['title']=ucfirst($page);
		$data['issue']=$this->model->get_issue();
		// print_r($data['issue']);
		$this->load->view('template/header');
	$this->load->view('pages/'.$page, $data);
		$this->load->view('template/footer');
			
	}
	public function add_issue(){
		// $slug = url_title($this->input->post('title'));
		$data = array(
			'ticket'=>$this->input->post('ticket'),
			'title'=>$this->input->post('title'),
			'category'=>$this->input->post('category'),
			'assigned'=>$this->input->post('assigned'),
			'date'=>$this->input->post('date'),
			'status'=>$this->input->post('status'),
			'description'=>$this->input->post('description')
			
		);
		// return $this->db->insert('issue',$data);
		$this->model->add_issue($data);
				// $data['title']=ucfirst($page);
	// 	$this->load->view('template/header');
	// $this->load->view('pages/home');
	// 	$this->load->view('template/footer');
		$path=site_url();
			header("Location:$path");

	}

	public function add_notification(){
		// $slug = url_title($this->input->post('title'));
		$data = array(
			'title'=>$this->input->post('ticket'),
			'date'=>$this->input->post('title'),
			'date'=>$this->input->post('date'),
			'assigned'=>$this->input->post('assigned')
		
			
		);
		// return $this->db->insert('issue',$data);
		$this->model->add_notification($data);
				// $data['title']=ucfirst($page);
		$this->load->view('template/header');
	$this->load->view('pages/home');
		$this->load->view('template/footer');
			

	}
}
?>