<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_management extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		//$this->session->set_userdata('username',"yosmelvin");

		if(!$this->session->userdata('username'))
		{

			//redirect('product');
			$this->load->helper(array('form'));

			$this->load->library('form_validation');

			$data['error'] = ""; 
			$this->load->view('login',$data);
		}
		else
		{
			redirect('product');
		}
	}
	
	public function login()
	{
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->model('user_management_m');

		$data = $this->input->post();

		$result = $this->user_management_m->login($data['username'],$data['password']);
		//print_r($result);
		$this->session->set_userdata('username',$result['username']);
		//echo "Username session: ".$this->session->userdata('username'); die();
		
		$this->form_validation->set_rules('username', 'Username', 
			'required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == false || $result==0)// && $result==0
		{		

			$data['error'] = "password salah";
			$this->load->view('login',$data);
		}
		else
			redirect('product');
			
		
			//redirect('product');
			//header("location:http://localhost:8081/myCI/product");
			//header("location:product.php?error=asdffsdfsd");
			//$_GET['error'] = asdffsdfsd << dihalmanan laen di akses pake GET
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user_management/login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */