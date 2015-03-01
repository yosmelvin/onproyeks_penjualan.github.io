<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_management_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();	
	}
	
	public function login($username,$password)
	{
		$this->db->select('userId,username,password');
		//$this->db->from('msuser');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('msuser');
		
		if($query->num_rows()>0)
		{
			return $query->row_array();
		}
		else
		{			
			return 0;
		}
	}
		
}
