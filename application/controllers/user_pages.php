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
		$data['category']=$this->model->get_category();
		// print_r($data['issue']);
		$this->load->view('template/header');
	$this->load->view('pages/user_dashboard', $data);
		$this->load->view('template/footer');
			
	}
	}
?>