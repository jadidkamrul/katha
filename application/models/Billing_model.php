<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {
    
     // Get all details ehich store in "products" table in database.
        public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
	}
    
    // Insert customer details in "customer" table in database.
	public function insert_customer($data)
	{
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
        // Insert order date with customer id in "orders" table in database.
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
        // Insert ordered product detail in "order_detail" table in database.
	public function insert_order_detail($data,$product_id=null)
	{

		//for sale quanity update by product id 
		$this->db->where('product_id', $product_id);
		$this->db->set('sale_count', 'sale_count+1', FALSE);
		$this->db->update('products');

		//for insert order detail 
		$this->db->insert('order_detail', $data);
	}

	public function inser_product_salecount($data)
	{
		$this->db->insert('products', $data);
	}
       
}