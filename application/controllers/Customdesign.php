<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Customdesign extends CI_Controller {
		

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
			$data['designs']=$this->Home_model->get_design_data();
			$this->load->view('common/header',$data);
			$this->load->view('customdesign',$data);
			$this->load->view('common/footer');
		}


		public function catdata(){

			$this->load->model('Home_model');
			$id = $this->input->GET('id');
			$where=array('d_category' => $id);
			$data = $this->Home_model->get_design_data_image('designs',$where);
			echo json_encode($data);  
		}
		
		function order_design(){
			$this->load->model('Home_model');

			$customer_data = $this->session->userdata('customer_data');
			$c_id = $customer_data['current_user_id'];
			if(!empty($c_id))
			{
				$img= $this->input->post('img');
				 $image="test".uniqid();



				$img = str_replace(' ', '+', str_replace('data:image/png;base64,', '', $img));
				$dataa = base64_decode($img);
				file_put_contents('./assets/images/'. str_replace(' ', '_', $image) .'.png', $dataa);
				$data = array(
					 'custom_image' => $image.'.png',
					 'customer_id'  => $c_id
					  );
				$inserted = $this->Home_model->inserter('customorder',$data);
				$datas['name']=$image;
				echo "<br/>";
				echo "<h3>Design Preview</h3>";
				echo '<img src="'.base_url().'/assets/images/'.$image.'.png"'.'/>';
			}else{
				$this->session->set_flashdata('errormsg', 'You should login for Order');
				redirect('customer/add');
			}
		  	
		}
	}