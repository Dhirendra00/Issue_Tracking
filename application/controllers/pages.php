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
		// $data['issue']=$this->model->get_issue();
		// $data['category']=$this->model->get_category();
		// $data['tbl_user']=$this->model->get_user();
		// print_r($data['issue']);
		// $this->load->view('template/header');
	  $this->load->view('pages/'.$page, $data);
		// $this->load->view('template/footer');
			
	}
	public function addUser($page='user_register')
	{
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}
		$data['title']=ucfirst('user_register');
		
		$this->load->view('template/header');
	$this->load->view('pages/user_register', $data);
		$this->load->view('template/footer');
			
	}
	}
?>