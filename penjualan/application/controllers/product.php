<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller 
{
	public function index()
	{

		if($this->session->userdata('username'))
		{
			$this->load->model('product_m');
			$data['products'] = $this->product_m->getAllProducts();

			$page_content['title'] = "Home";
			$page_content['content'] = $this->load->view('home',$data,TRUE);
			$this->load->view('template/main_template',$page_content);
		}
		else
		{
			redirect('user_management');
		}
	}
	
	public function product_detail($productId)
	{	
		$this->load->helper('form');
		if($this->session->userdata('username'))
		{
			$this->load->model('product_m');
			$data['product'] =$this->product_m->getProductDetail($productId);
			$page_content['content'] = $this->load->view('product_detail',$data,TRUE);
			$this->load->view('template/main_template',$page_content);
		}
		else
		{
			redirect('user_management');
		}
	}


	public function update_product($productId)
	{
		if($this->session->userdata('username'))
		{
			$this->load->model('product_m');
			$data = $this->input->post();
			$data['productId'] = $productId;
			$this->product_m->update_product($data);
			$this->index();
		}
		else
		{
			redirect('user_management');
		}
	}

	public function delete_product($productId)
	{	
		//$this->load->helper('form');
		if($this->session->userdata('username'))
		{
			$this->load->model('product_m');
			$this->product_m->delete_product($productId);
			$this->index();
		}
		else
		{
			redirect('user_management');
		}
	}
}

