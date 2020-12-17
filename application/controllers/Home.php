<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{

		$limit = 12;
		$this->load->model('Home_model');
		$data['category']=$this->Home_model->get_data('category');
		$data['products_sell_count']=$this->Home_model->get_data('products','sale_count','',$limit);
		$data['products']=$this->Home_model->get_data('products','product_id','',$limit);
		$data['top_seller'] = $this->Home_model->top_seller();
 		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);

		
		$this->load->view('common/header',$data);
		$this->load->view('common/slider');
		$this->load->view('common/mainContent',$data);
		$this->load->view('common/footer');
	}

	public function ProductDetails($id)
	{
		$this->load->model('Home_model');
		$where = array('product_id' => $id);
		$data['category']=$this->Home_model->get_data('category');
		$data['products']=$this->Home_model->get_data('products','',$where);
		$where_p_id = array('p_id' => $id);
		$data['customer_coment'] = $this->Home_model->get_coment_data('review',$where_p_id);
		// echo '<pre>';
		// print_r($data['customer_coment']);
		// die;

		$data['rating']  = $this->Home_model->totalrating($id);
		$data['totalrow']  = $this->Home_model->totalrow($id);
		if(!empty($data['rating'][0]->rating && $data['totalrow'][0]->p_id)){
		$data['star'] = $data['rating'][0]->rating / $data['totalrow'][0]->p_id;
		}
		else{
			$data['star'] = 0;
		}
		// print_r($data['star']);
		// die;

	

		//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);

 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);		
		$this->load->view('common/header',$data);
		$this->load->view('common/ProductDetails',$data);
		$this->load->view('common/footer');
	}

	public function related()
	{
		$where=array('p_category' => $this->uri->segment(3));
		return $data['ralated']=$this->Home_model->get_data('products','',$where);
	}


	public function categoryAll($cat_id)
	{
		$this->load->model('Home_model');
		$cat_id;
		$where=array('p_category ' => $cat_id);
 		$data['categoryproduct'] = $this->Home_model->get_data('products','',$where);
		//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
		$this->load->view('common/header',$data);
		$this->load->view('common/categoryall',$data);
		$this->load->view('common/footer');
	}

	public function viewAllProduct()
	{

		$this->load->model('Home_model');
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
		$data['allproduct'] = $this->Home_model->get_data('products');
		// echo "<pre>";
		// print_r($data['allproduct']);
		// die;
		$this->load->view('common/header',$data);
		$this->load->view('viewallProduct',$data);
		$this->load->view('common/footer');
	}

	public function reviewadd()
	{
		$this->load->model('Home_model');
		$rating = $this->input->post('rating');
		$p_id = $this->input->post('p_id');
		$comment = $this->input->post('comment');
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		if(!empty($this->session->userdata('customer_data')))
		{
			$data = array(
					'c_id' => $c_id,
					'p_id' => $p_id,
					'rating' => $rating,
					'coment' => $comment
				);
	
			$datainsert = $this->Home_model->inserter('review',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			 $this->session->set_flashdata('errormsg', 'You should login for review');
			redirect('customer/add');
		}
	}

}