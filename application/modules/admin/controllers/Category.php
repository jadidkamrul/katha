<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
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

	public function addCategory(){
		$this->load->view('common/header');
		$this->load->view('addCategory');
		$this->load->view('common/footer');

	}

	public function add_category(){
		
		
		$this->load->model('prime_model');
		$catname = $this->input->post('categoryname');
		
		$where=array('catname' => $catname);
		$exists=$this->prime_model->get_data('category','',$where);


		if(empty($exists))
		{

		if(!empty($_FILES['userfile']['name']))
	  	{
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
	  		 	echo 'error';
	  			$error = array('error' => $this->upload->display_errors());
	  		 }
	  		 else
	  		{
	  			echo "right";
	  			
 				$data = array('upload_data' => $this->upload->data());
  				$image=$data['upload_data']['file_name'];
				$data=array(	
								'catname' => $catname,
				 				'cat_image' => $image
				 			);

	  				$datainsert = $this->prime_model->inserter('category',$data);
	  				
  				if($datainsert > 0){
  				$this->session->set_flashdata('successmsg','Category Add Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Category not Upload');
	  			}
	  		}
	  	}
	}

	  	else{
  				$this->session->set_flashdata('errormsg','Product not Upload');
  			}

		 redirect('admin/category/addCategory');


	}

	public function allCategory(){
		$this->load->model('prime_model');
		$data['category']=$this->prime_model->get_data('category');
		$this->load->view('common/header');
		$this->load->view('allCategory',$data);
		$this->load->view('common/footer');
	}


	public function catedit()
	{
		$where=array('cat_id' => $this->uri->segment(4));
		$this->load->model('prime_model');
		$data['category']=$this->prime_model->get_data('category','',$where);
		$this->load->view('common/header');
		$this->load->view('catedit',$data);
		$this->load->view('common/footer');
	}

	public function edit_category()
	
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
						$where=array('cat_id' => $this->input->post('id'));
		  				$data = array('upload_data' => $this->upload->data());
		  				$image=$data['upload_data']['file_name'];
						$data=array(
								'catname' => $this->input->post('categoryname'),
				 				'cat_image' => $image
				 		);
							
		  			$datainsert = $this->prime_model->updater('category',$where,$data);
		  			
		  			if($datainsert > 0){
	  				$this->session->set_flashdata('successmsg','Category Update Successfully');
		  			}else{
		  				$this->session->set_flashdata('errormsg','Category not Upload');
		  			}
		  		  redirect('admin/Category/allCategory');
		  		}
		  }

				 else
				 {
				 	$where=array('cat_id' => $this->input->post('id'));
					$data=array('catname' => $this->input->post('categoryname'));
					$this->session->set_flashdata('successmsg','Category Add Successfully');
					$this->prime_model->updater('category',$where,$data);
				 }
				 redirect('admin/Category/allCategory');
	}
		

	public function catdelete()
		{
			$this->load->model('prime_model');
			$where=array('cat_id' => $this->uri->segment(4));
			$delete = $this->prime_model->deleter('category',$where);
			if($delete > 0){
  				$this->session->set_flashdata('successmsg','Category Deleted Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Category not Deleted');
	  			}

			redirect('admin/category/allCategory');
		}	
}