<?php
/**
 * 
 */
class It_staff_pages extends CI_Controller
{
	// $_SESSION['user']="Dhirendra";
	public function dashboard()
	{
		if (!file_exists(APPPATH.'views/pages/It_staff_dashboard.php')) {
			show_404();
		}
		$data['title']=ucfirst('dashboard');
		$data['issue']=$this->model->get_issue();
		$data['category']=$this->model->get_category();
		// print_r($data['issue']);
		$this->load->view('template/It_staff_header');
	$this->load->view('pages/It_staff_dashboard', $data);
		$this->load->view('template/footer');
			
	}
	}
?>