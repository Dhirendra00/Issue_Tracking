<?php
/**
 * 
 */
class Pages extends CI_Controller
{
	
	public function dashboard($page='It_head_dashboard')
	{
		if (!file_exists(APPPATH.'views/user_pages/'.$page.'.php')) {
			show_404();
		}
		$data['title']=ucfirst($page);
		$data['issue']=$this->model->get_issue();
		$data['category']=$this->model->get_category();
		// print_r($data['issue']);
		$this->load->view('template/user_header');
	$this->load->view('pages/'.$page, $data);
		$this->load->view('template/user_footer');
			
	}
	}
?>