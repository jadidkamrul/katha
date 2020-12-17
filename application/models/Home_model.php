<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends CI_model {

    public function get_data($table = NULL, $orderby = NULL, $where = NULL, $limit= NULL) {
        $this->db->select('*');
        $this->db->from($table);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, "DESC");
        }
          if ($limit != '') {
            $this->db-> limit($limit);
        }

        $result = $this->db->get()->result_array();
        return $result;
    }

    public function get_customer_order($table = NULL, $orderby = NULL, $where = NULL){


        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->join('order_detail', 'order_detail.orderid = orders.o_id');
        $this->db->join('customers', 'customers.serial = orders.customerid');
        $this->db->join('products', 'order_detail.productid = products.product_id');
        $query = $this->db->get(); 
        return $query->result_array();
    }

    public function get_coment_data($table = NULL, $where_p_id = NULL){

        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where_p_id);
        $this->db->join('customers', 'review.c_id  = customers.serial ');
        return $query = $this->db->get()->result_array();

    }


      



     
     function get_design_data(){
        $this->db->select('*');
        $this->db->from('designcategory');
        //$this->db->where($where);
        //$this->db->join('designcategory','designs.d_category=designcategory.d_id');
        $query = $this->db->get()->result_array();


         return $query;

        }

        function get_design_data_image($table = NULL, $where = NULL){
        $this->db->select('*');
        $this->db->from('designs');
        $this->db->where($where);
        $this->db->join('designcategory','designs.d_category=designcategory.d_id');
        $query = $this->db->get()->result_array();
        return $query;

        }












    public function top_seller($table = NULL){
        $this->db->select('*');
        $this->db->join('products','products.user_id = users.id');
        $this->db->order_by("sale_count","DESC");
        $query = $this->db->get('users');
        return $result =  $query->result_array();
        
    }


      public function get_wishlist($c_id){
            $this->db->select('*');
            $this->db->from('wishlist');
            $this->db->where('c_id',$c_id);
            $this->db->join('products', 'products.product_id = wishlist.p_id');
           // $this->db->join('customers', 'customers.serial = orders.o_id');
            $query = $this->db->get(); 
          return $query->result_array();
      }

       public function get_single_cart($pid){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('product_id',$pid);
            $query = $this->db->get()->result_array();
          return $query;
      }

      public function get_single_wish($pid){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('product_id',$pid);
        $query = $this->db->get()->result_array();
        return $query;
      }

    public function inserter($table, $data) {

        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function updater($tbl_name,$where,$data) {
        $this->db->where($where);
        $result = $this->db->update($tbl_name, $data);
        return $this->db->affected_rows();
    }

    public function totalrating($id){

        $this->db->select_sum('rating');
        $this->db->from('review');
        $this->db->where('p_id', $id);
        return $query = $this->db->get()->result();

    }

    public function totalrow($id){
      return  $data = $this->db->query('SELECT COUNT(p_id) as p_id FROM review where p_id = '.$id.'')->result();
    }

    public function customer_login_data_check(){

        $cemail = $this->input->post('cemail');
        $password = $this->input->post('cpasword');

  
        $attr = array(
            'email'      => $cemail,
            'password'  => $password
        );

            $result = $this->db->get_where('customers',$attr);
            if($result->num_rows() == 1){
                $attr = array(
                    'current_user_id'  => $result->row(0)->serial,
                    'current_customer_name'  => $result->row(0)->name,
                    'current_customer_email'  => $cemail,
                    'current_customer_address'  => $result->row(0)->address,
                    'current_customer_phone'  => $result->row(0)->phone,
                );
               
                $this->session->set_userdata('customer_data',$attr);
                return TRUE;
            }else {
                    return FALSE;
            }
        }


        function wishdeleter($table,$where) {
                $result = $this->db->where($where)->delete($table);
                return $this->db->affected_rows();
            }


}