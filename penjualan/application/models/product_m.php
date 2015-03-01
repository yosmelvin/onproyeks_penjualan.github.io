<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();	
	}
	
	public function getAllProducts()
	{
		$this->db->select('*');
		$query = $this->db->get('msproduct');
		
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return 0;
		}
	}
	
	public function getProductDetail($productId)
	{
		$this->db->select('productId,productName,productStock,productPrice');
		$this->db->where('productId',$productId);
		$query = $this->db->get('msproduct');
		
		if($query->num_rows()>0)
		{
			return $query->row_array();			
		}
		else
		{
			return 0;
		}
	}

	public function update_product($data)
	{
		// $data = array(
  //              'productName' => $data['productName'],
  //              'productStock' => $data['productStock'],
  //              'productPrice' => $data['productPrice']
  //           );

		$this->db->where('productId', $data['productId']);
		$this->db->update('msproduct', $data); 
	}

	public function delete_product($productId){
		$query ="DELETE FROM msproduct
		WHERE productId = ".$productId;
		$this->db->query($query);
	}
	
}
