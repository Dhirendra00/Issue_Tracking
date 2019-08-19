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
		 $data['issue_title']=$this->model->get_issuesTitle();
		$data['issue']=$this->model->get_issue();
		
		// print_r($data['issue']);
		$this->load->view('template/user_header');
	$this->load->view('pages/user_dashboard', $data);
		$this->load->view('template/footer');
			
	}
		public function add_issue(){
		// $slug = url_title($this->input->post('title'));
			$_POST=$this->security->xss_clean($_POST);
			extract($_POST);

			// $this->db->where('id',$id);
			// $this->db->join('table2','pk1=pk2');
			// $this->db->get('users');


		$data['title']=ucfirst('Dashboard');
		if($this->input->post('issue')=='other')
		{
			$today = Date('Y-m-d');
			if($_POST['date']<$today){
				echo "error";
			}
			return;
			$data = array(
					'ticket'=>$this->input->post('ticket'),
					'issue'=>$this->input->post('textarea'),
					'date'=>$this->input->post('date'),
					'description'=>$this->input->post('description')
					
				);
		}
		else
		{$data = array(
					'ticket'=>$this->input->post('ticket'),
					'issue'=>$this->input->post('issue'),
					'date'=>$this->input->post('date'),
					'description'=>$this->input->post('description')
					
				);}
		// return $this->db->insert('issue',$data);
		$this->model->add_issue($data);
	redirect('user_dashboard');

	}

	}
?>