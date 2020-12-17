<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prime_model extends CI_model {

    public function inserter($table, $data) {

        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function deleter($table,$where) {
        $result = $this->db->where($where)->delete($table);
        return $this->db->affected_rows();
    }

    public function updater($tbl_name,$where,$data) {
        $this->db->where($where);
        $result = $this->db->update($tbl_name, $data);
        return $this->db->affected_rows();
    }

    public function get_data($table = NULL, $orderby = NULL, $where = NULL) {
        $this->db->select('*');
        $this->db->from($table);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, "DESC");
        }

        $result = $this->db->get()->result_array();
        return $result;
    }

     public function get_order_data($orderby = NULL, $where = NULL) {
        $this->db->select('*');
        $this->db->from('order_meta');
        $this->db->join('orders','order_meta.order_id=orders.order_id');
         $this->db->join('products','products.product_id=order_meta.product_id');
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, "DESC");
        }

        $result = $this->db->get()->result_array();
        return $result;
    }
    function check_exist($table = NULL, $where = NULL) {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $count = $query->num_rows();
        //print_r($count) ;
        //exit;
    }

    function check_table($table = NULL) {

        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $count = $query->num_rows();
        //print_r($count) ;
        //exit;
    }

    public function get_sub_cat($table = NULL) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where("parent !=", '0');
        $result = $this->db->get()->result_array();
        return $result;
    }
    function get_product_data($limit, $start){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by('product_id','DESC');
        $this->db->where('admin_id',$this->session->logged_in['id']);
        $this->db->join('categories','products.category_id = categories.cat_id');
        $this->db->limit($limit, $start);
        $query = $this->db->get()->result_array();
        return $query;
        }

    		function get_cars($limit, $start,$sort_by)
        {
          $sql = "select * from car order by ".$sort_by." desc  limit " . $start . ", " . $limit;
          $query = $this->db->query($sql);
          return $query->result();
        }

        public function view_photos($id)
        {
          $this->db->where('product_id',$id);
          $query=$this->db->get('product_atribute');
          return $query->result();
        }

        public function ordersData($table = NULL, $orderby = NULL, $where = NULL)
        {
          
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->join('order_detail', 'order_detail.orderid = orders.o_id');
        $this->db->join('customers', 'customers.serial = orders.customerid');
        $this->db->join('products', 'products.product_id = order_detail.productid');
        $query = $this->db->get(); 

        return $query->result_array();
        }

        public function merchant()
        {
          $query=$this->db->get('users');
          return $query->result();
        }
        public function approve($id,$data)
        {
          $this->db->where('id',$id);
          $result = $this->db->update('users', $data);
          return $this->db->affected_rows();

        }
        public function agent_approve($id,$data)
        {
          $this->db->where('id',$id);
          $result = $this->db->update('users', $data);
          return $this->db->affected_rows();

        }
        public function shop_approve($id,$data)
        {
          $this->db->where('id',$id);
          $result = $this->db->update('users', $data);
          return $this->db->affected_rows();

        }
        public function agent_post()
        {
          $this->db->where('posted_by >','0');
          $query=$this->db->get('products');
          return $query->result();
        }
        public function post_approve($id,$data)
        {
          $this->db->where('product_id',$id);
          $result = $this->db->update('products', $data);
          return $this->db->affected_rows();
        }
        public function merchant_post()
        {
          $this->db->where('merchant_id >','0');
          $this->db->order_by('product_id','DESC');
          $query=$this->db->get('products');
          return $query->result();
        }
        public function shop_post()
        {
          $this->db->where('shop_id >','0');
          $this->db->order_by('product_id','DESC');
          $query=$this->db->get('products');
          return $query->result();
        }
        public function get_sub_menus()
        {
          $this->db->join('menu','sub_menu.menuid=menu.menu_id');
          $query=$this->db->get('sub_menu');
          return $query->result();
        }

}
