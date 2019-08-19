<?php
/**
 * 
 */
class It_head_pages extends CI_Controller
{
	// $_SESSION['user']="Dhirendra";
	public function dashboard()
	{
		if (!file_exists(APPPATH.'views/pages/It_head_dashboard.php')) {
			show_404();
		}
		$data['title']='Dashboard';
		$data['issue']=$this->model->get_issue();
		$data['category']=$this->model->get_category();
		// print_r($data['issue']);
		$this->load->view('template/user_header');
	$this->load->view('pages/It_head_dashboard', $data);
		$this->load->view('template/footer');
			
	}
	}
?>