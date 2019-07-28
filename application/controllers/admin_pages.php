<?php
/**
 * 
 */
class admin_pages extends CI_Controller
{
	
	public function dashboard()
	{
		if (!file_exists(APPPATH.'views/pages/admin_dashboard'.'.php')) {
			show_404();
		}
		$data['title']='Dashboard';
		$data['issue']=$this->model->get_issue();
		$data['category']=$this->model->get_category();
		$data['tbl_user']=$this->model->get_user();
		// print_r($data['issue']);
		$this->load->view('template/header');
	$this->load->view('pages/admin_dashboard',$data);
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
	public function add_category(){
		// $slug = url_title($this->input->post('title'));
		$data = array(
			'name'=>$this->input->post('name')	
		);
		// return $this->db->insert('issue',$data);
		$this->model->add_category($data);
				// $data['title']=ucfirst($page);
		// $this->load->view('template/header');
	// $this->load->view('pages/home');
		// $this->load->view('template/footer');
			
$path=site_url();
			header("Location:$path");
	}

public function add_user(){
		// $slug = url_title($this->input->post('title'));
		$data = array(
			'fname'=>$this->input->post('fname'),
			'mname'=>$this->input->post('mname'),
			'lname'=>$this->input->post('lname'),	
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'contact'=>$this->input->post('contact'),
			'date'=>$this->input->post('date'),
			'nationality'=>$this->input->post('nationality'),
			'address'=>$this->input->post('address'),
			'street_name'=>$this->input->post('street_name'),
			'street_number'=>$this->input->post('street_number'),
			'country'=>$this->input->post('country')
		);
		// return $this->db->insert('issue',$data);
		$this->model->add_user($data);
				// $data['title']=ucfirst($page);
		// $this->load->view('template/header');
	// $this->load->view('pages/home');
		// $this->load->view('template/footer');
			
$path=site_url();
			header("Location:$path");
	}
}

?>