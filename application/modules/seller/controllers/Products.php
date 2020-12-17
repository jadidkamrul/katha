<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct()
  {
      parent::__construct();
      $this->load->library('ion_auth');
      $this->load->model('prime_model');
      if(!$this->ion_auth->logged_in())
      {
        redirect('login');
      }
  }

	public function index()
	{
		
		$user = $this->ion_auth->user()->row();
		$id=$user->id;
		$where=array('user_id' => $id);
		$this->load->model('prime_model');
		$data['products']=$this->prime_model->get_data('products','',$where);
		$this->load->view('common/header');
		$this->load->view('all_products',$data);
		$this->load->view('common/footer');
	}
	public function add_product()
	{
		$data['category'] = $this->prime_model->get_data('category');
		$this->load->view('common/header');
		$this->load->view('add_product',$data);
		$this->load->view('common/footer');
	}
	public function add() {
		$user = $this->ion_auth->user()->row();
		$this->load->model('prime_model');
		if(!empty($_FILES['userfile']['name']))
	  	    {
   	   			$data=array('product_name' => $this->input->post('name'),
 							'product_sku' => $this->input->post('sku'),
						 	'product_price' => $this->input->post('price'),
						 	'p_category' => $this->input->post('category'),
						 	'product_status' => $this->input->post('status'),
						 	'user_id' => $user->id,
						 	'product_desc' => $this->input->post('details'),
						 	'product_quantity' => $this->input->post('quantity'));
   	   		
			$product_id = $this->prime_model->inserter('products',$data);
	       	$files = $_FILES;
            $count = count($_FILES['userfile']['name']);
            for($i=0; $i<$count; $i++)
            {
                $_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
                $config['upload_path'] = 'assets/uploads';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2000000';
                $config['remove_spaces'] = true;
                $config['overwrite'] = false;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = array('upload_data' => $this->upload->data());
		  		$image=$data['upload_data']['file_name'];
                $data=array('image' => $image, 'p_i_id' => $product_id);
                $inserted = $this->prime_model->inserter('product_images',$data);
                
                if($inserted > 0){
	  				$this->session->set_flashdata('successmsg','Product Add Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Product not Upload');
	  			}
			}
	  	}
	  	else{
	  			$this->session->set_flashdata('errormsg','Product not Upload');
	  		}
		 redirect('seller/products/add_product');
      }


			public function edit()
			{
				$where=array('product_id' => $this->uri->segment(4));
				$this->load->model('prime_model');
				$data['products']=$this->prime_model->get_data('products','',$where);
				$this->load->view('common/header');
				$this->load->view('edit_products',$data);
				$this->load->view('common/footer');
			}

			public function edit_products()
			{
				$this->load->model('prime_model');
				if(!empty($_FILES['userfile']['name']))
		  	 {
		       //$img1=$_FILES['userfile']['name'];
		  		 $config['upload_path'] = 'assets/uploads';
		  		 $config['allowed_types'] = 'gif|jpg|png';
		  		 $config['max_size'] = '1024';
		  		 $config['max_width']  = '1024';
		  		 $config['max_height']  = '768';
		         $config['overwrite'] = false;
		  		 $config['encrypt_name'] = TRUE;
		      //  $config['file_name']  = $img1;
		  		 $this->load->library('upload', $config);
		  		 if ( ! $this->upload->do_upload())
		  		 {
		  				$error = array('error' => $this->upload->display_errors());
		  		 }
		  		 else
		  		 {
						 $where=array('product_id' => $this->input->post('id'));
		  				 $data = array('upload_data' => $this->upload->data());
		  				 $image=$data['upload_data']['file_name'];
							 $data=array('product_name' => $this->input->post('name'),
						 							 'product_sku' => $this->input->post('sku'),
												 	 'product_price' => $this->input->post('price'),
												 	 'product_image' => $image,
												 	 'product_status' => $this->input->post('status'),
												 	 'product_desc' => $this->input->post('details'),
												 	 'product_quantity' => $this->input->post('quantity'));
		  				$this->prime_model->updater('products',$where,$data);
		  		 }
		  	 }

				 else
				 {
				 	$where=array('product_id' => $this->input->post('id'));
					 $data=array('product_name' => $this->input->post('name'),
											 'product_sku' => $this->input->post('sku'),
											 'product_price' => $this->input->post('price'),
											 'product_status' => $this->input->post('status'),
											 'product_desc' => $this->input->post('details'),
											 'product_quantity' => $this->input->post('quantity'));
					 $this->prime_model->updater('products',$where,$data);
				 }
				 redirect('seller/products');
			}

			public function delete()
			{
				$this->load->model('prime_model');
				$where=array('product_id' => $this->uri->segment(4));
				$deleted = $this->prime_model->deleter('products',$where);
				
				if($deleted > 0){
	  				$this->session->set_flashdata('successmsg','Product Deleted Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Product not Upload');
	  			}


				redirect('seller/products');
			}

}
