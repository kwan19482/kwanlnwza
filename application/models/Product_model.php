<?php

class Product_model extends CI_Model {

	public function getAll($start=0 , $perpage=0)
	{
		$this->db->select("*");
		$this->db->from("products");
		// if($this->session->userdata('language')=='TH')
		// {
		// 	$this->db->order_by('pro_name_th','ASC');
		// }
		// else{
		// 	$this->db->order_by('pro_name_en','ASC');
		// }
		$this->db->order_by('orders');
		$this->db->limit($perpage,$start);
		$query = $this->db->get();
		return $query->result();

	}
	public function count()
	{
		
        $this->db->from('products');    
        
        return $this->db->count_all_results();

	}

	public function getOne($product_id)
	{
		$this->db->where('pro_id',$product_id);
        $query = $this->db->get('products');
        
        return $query->row(0);
	}

}