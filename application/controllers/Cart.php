<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function add_to_cart()
	{
		$this->load->model('Home_model');
		$this->load->library('cart');
		$pid = $this->uri->segment(3);
		if(!empty($pid)){
			$single_cart_data = $this->Home_model->get_single_cart($pid);
			foreach ($single_cart_data as $cartdata) { 
				$data=array(
				'id' => $cartdata['product_id'],
				'name' => $cartdata['product_name'],
				'price' => $cartdata['product_price'],
				'qty' => 1
				);
			}
		}else{
			$data=array(
					'id' => $this->input->post('id'),
					'name' => $this->input->post('name'),
					'price' => $this->input->post('price'),
					'qty' => $this->input->post('quantity')
				);
		}
		$this->cart->insert($data);
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function wishlist(){
		$this->load->model('Home_model');
		$pid = $this->uri->segment(3);
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		if(!empty($c_id)){
			if(!empty($pid)){

				$data = array(
					'p_id' => $pid,
					'c_id' => $c_id
					);
				$where=array('p_id' => $pid,
							 'c_id' => $c_id);
				$wishdata = $this->Home_model->get_data('wishlist','',$where);
				if(empty($wishdata))
				{
					$datainsert = $this->Home_model->inserter('wishlist',$data);
				}
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$p_id = $this->input->post('product_id');
				if(!empty($this->session->userdata('customer_data')))
				{
					$data = array(
						'p_id' => $p_id,
						'c_id' => $c_id
						);
					$where=array('p_id' => $p_id,
								 'c_id' => $c_id);
					$wishdata = $this->Home_model->get_data('wishlist','',$where);
				if(empty($wishdata))
					{
						$datainsert = $this->Home_model->inserter('wishlist',$data);
					}
					redirect($_SERVER['HTTP_REFERER']);
				}else{
					redirect('customer/add');
				}
			}
		}
		else{

	  		$this->session->set_flashdata('errormsg','Customer Not Logged in');
			redirect('customer/add');
		}
	}

	public function wishlistView(){
	$this->load->model('Home_model');
		//for  showing wishlist data in header
		$c_id = $this->session->customer_data['current_user_id'];
 		$data['wishdata'] = $this->Home_model->get_wishlist($c_id);	

 		// echo'<pre>';
 		// print_r($data['wishdata']);
		$this->load->view('common/header',$data);
		$this->load->view('wishlistView',$data);
		$this->load->view('common/footer');
	}

	public function wishdelete($p_id){

	
		$this->load->model('Home_model');
		$where=array('p_id ' => $p_id);
		$this->Home_model->wishdeleter('wishlist',$where);
		redirect('cart/wishlistView');
			
       
    }


	public function cartView(){
		$this->load->model('Home_model');
		//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);	
		$this->load->view('common/header',$data);
		// $this->load->view('common/place_cart');
		$this->load->view('common/cartContent');
		$this->load->view('common/footer');
	}


	public function cartViewww(){
		$this->load->model('Home_model');
		//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);	
		$this->load->view('common/header',$data);
		// $this->load->view('common/place_cart');
		$this->load->view('common/cartContenttt');
		$this->load->view('common/footer');
	}


	public function checkout(){
		$this->load->model('Home_model');
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);	
		$this->load->view('common/header',$data);
		// $this->load->view('common/place_cart');
		$this->load->view('checkoutpage');
		$this->load->view('common/footer');

	}

	// public function cartView1(){
	// 	$this->load->model('Home_model');

	// 	//for  showing wishlist data in header

	// 	$customer_data = $this->session->userdata('customer_data');
	// 	$c_id = $customer_data['current_user_id'];
	// 	$where=array('c_id ' => $c_id);
 // 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);	
	// 	$this->load->view('common/header',$data);
	// 	// $this->load->view('common/place_cart');
	// 	$this->load->view('common/cartContentt');
	// 	$this->load->view('common/footer');
	// }

	public function remove($rowid) {
			$this->load->library('cart');
        // Check rowid value.
		if ($rowid==="all"){
        // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
        // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
            // Update cart data, after cancle.
			$this->cart->update($data);
			redirect('cart/cartView');
		}
		
         // This will show cancle data in cart.
		redirect('Home');
	}


	  function update_cart(){
	  	$this->load->library('cart');
	  	
	  $cart_info = $this->input->post('cart');
	   	foreach( $cart_info as $cart)
		{	
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
            $data = array(
				'rowid'   => $rowid,
                'price'   => $price,
                'amount' =>  $amount,
				'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
		redirect('cart/cartView');        
	}

	public function place_cart_view(){
		$this->load->model('Home_model');
        $customer_data = $this->session->userdata('customer_data');

  		if(isset($customer_data)){
		$c_id = $this->session->customer_data['current_user_id'];
 		$data['wishdata'] = $this->Home_model->get_wishlist($c_id);	

		$this->load->library('cart');
		$this->load->view('common/header',$data);
		$this->load->view('common/place_cart');
		$this->load->view('common/footer');
		}else{
			redirect('customer/Add');
		}
	}


	public function save_order()
	{
			$this->load->library('cart');
			$this->load->model('billing_model');
          // This will store all values which inserted  from user.
		// $customer = array(
		// 	'name' 		=> $this->input->post('name'),
		// 	'email' 	=> $this->input->post('email'),
		// 	'address' 	=> $this->input->post('address'),
		// 	'phone' 	=> $this->input->post('phone')
		// );
		// And store user imformation in database.
		//$cust_id = $this->billing_model->insert_customer($customer);
	$cust_id = $this->session->customer_data['current_user_id'];
		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);		

		$ord_id = $this->billing_model->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);		

			$product_id = $item['id'];

                // Insert product imformation with order detail, store in cart also store in database. 
		        $cust_id = $this->billing_model->insert_order_detail($order_detail,$product_id);
			endforeach;
		endif;
	      
                // After storing all imformation in database load "billing_success".
                
				$this->cart->destroy();
                redirect('Home');
            }
}
