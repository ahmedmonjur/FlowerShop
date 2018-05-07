<?php
class mhome extends CI_Model{
	function login()
	{
		//this function will log the user in as admin if the data matches and save it in the session
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',sha1($this->input->post('password')));
		$query=$this->db->get('admins');
		$a= $query->num_rows();
		if($a>0)
		{
			$array=$query->row_array();
			$data=array(
				'logged_in'=>TRUE,
				'username'=>'murshida');
				$this->session->set_userdata($data);
				return TRUE;
			
		}
		else{
			return FALSE;
		}
	}
	function update_profile()
	{
		$this->form_validation->set_rules('username','Userame','required');
	    $this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==FALSE)
		{
			echo   validation_errors();
		}
		else{//if main image has been sent save the image and get the file name
			if($_FILES["profile_image"]["size"]>0)
			{
			    $config['upload_path'] = './site_elements/control panel/images';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '100000';
				$config['max_width'] = '2000';
				$config['max_height'] = '1600';
                $this->upload->initialize($config);
				if(!$this->upload->do_upload('profile_image'))
				{
					
					//return FALSE;
					var_dump($this->upload->display_errors());
				}
				else{
					 $upload_data=$this->upload->data();
				}
				
            }
			if(isset($upload_data))
			{
				$profile_image=$upload_data['file_name'];
			}
			else{
				$profile_image= $this->input->post('image');
			}
			 $admin_id=$this->input->post('admin_id');
			$profile_array=array(
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'profile_image' =>$profile_image,
				);
				$this->db->where('admin_id',$admin_id);
		        $this->db->update('admins',$profile_array);
				return TRUE;
		}
	}
	function get_profile_info()
	{
		$query=$this->db->get('admins');
		$array=$query->result_array();
		return $array;
	}

	
	
	
///////////////////////////////////////////////////////////      Home Page (Fetch Category code)      ////////////////////////////////////////////////////////////
	// 1.this function gets the Occasions for Category
	function Occasions(){
    $this->db->select('occasion_id,occasion_name');
	$this->db->where('status','enable');
	$this->db->order_by('occasion_name');
	$query=$this->db->get('occasion');
	return $query->result_array();
	}
	///////////////////////////////////////////////////////////      Category page (code)      ////////////////////////////////////////////////////////////
	public function occasions_product($oc_id){
		$this->db->where('occasion_id',$oc_id);
	    $query=$this->db->get('product');
		return $query->result_array();
	}
	
	
	public function get_occasions_name($oc_id)
	{
		 $this->db->where('occasion_id',$oc_id);
		 $query=$this->db->get('occasion');
		 if($query->num_rows()>0)
		 {
			$array=$query->row_array();
		 return $array['occasion_name'];
		 }
	}	
///////////////////////////////////////////////////////////      Home Page (Fetch Category code)      ////////////////////////////////////////////////////////////
	
	// 2.this function gets the product type for Category
	function product_type(){
    $this->db->select('	product_type_id,product_type');
	$this->db->where('status','enable');
	$this->db->order_by('product_type');
	$query=$this->db->get('product_type');
	return $query->result_array();
	}
	
/////////////////////////////////////////////////////////// product_type_detail     Category page (code)      ////////////////////////////////////////////////////////////

		public function category_product_type($ca_t_id){
		$this->db->where('product_type_id',$ca_t_id);
	    $query=$this->db->get('product');
		return $query->result_array();
	}
	
	
	public function get_product_type($ca_t_id)
	{
		 $this->db->where('product_type_id',$ca_t_id);
		 $query=$this->db->get('product_type');
		 if($query->num_rows()>0)
		 {
			$array=$query->row_array();
		 return $array['product_type'];
		 }
	}
	
	// 3.this function gets the #Jewelery  for Category
	// 4.this function gets the Bouquets  for Category
	// 5.this function gets the Decoration   for Category
	// 6.this function gets the Wedding   for Category (not need)
	// 7.this function gets the Receiption   for Category(not need)
	// 8.this function gets the Flower   for Category(not need)
	// 9.this function gets the Die collection    for Category
	
///////////////////////////////////////////////////////////      Home Page (Fetch Category code)      ////////////////////////////////////////////////////////////
	// 10.this function gets the Category 
	function Category(){
    $this->db->select('category_id,category_name');
	$this->db->where('status','enable');
	$this->db->order_by('category_name');
	$query=$this->db->get('category');
	return $query->result_array();
	}
	///////////////////////////////////////////////////////////      Category page (code)      ////////////////////////////////////////////////////////////
	public function category_product($cat_id){
		$this->db->where('category_id',$cat_id);
	    $query=$this->db->get('product');
		return $query->result_array();
	}

///////////////////////////////////////////////////////////      Home Page Products (Codes)      ////////////////////////////////////////////////////////////
	//this function gets the latest products for home page
	function get_latest_products(){
	$this->db->select('product_id,product_name,product_unit_price,image');
	//$this->db->order_by('posted_at','asc');
	$this->db->limit(8);
	$query=$this->db->get('product');
	return $query->result_array();
	}
	
	//this function gets all the categories
	function get_categories(){
    //$this->db->select('*');
	//$this->db->order_by('category_name');
	//$query=$this->db->get('category');
	//return $query->result_array();
	}
	
/////////////////////////////////////      Home Page  (Product Single View Details)    ///////////////////////////////////
	function get_most_viewed_categories(){
    $this->db->select('category_id,category_name');
	$this->db->order_by('no_of_times_viewed',"desc");
	$this->db->limit(6);
	$query=$this->db->get('category');
	return $query->result_array();
	}


/////////////////////////////////////      Home Page  (Product Single View Details)    ///////////////////////////////////
		//this function gets the  single products according to the id
		function get_product($id)
		{
			 $this->db->where('product_id',$id);
			 $query=$this->db->get('product');
			 //increase the number of views for this product
			 $array=$query->row_array();
			 $new_views=$array['no_of_times_viewed']+1;
			 $data=array('no_of_times_viewed'=> $new_views);
			 $this->db->where('product_id',$id);
			 $this->db->update('product',$data);
			 //increase the number of views for the product
			 $this->db->select('no_of_times_viewed');
			 $this->db->where('category_id',$array['category_id']);
			// $newquery=$this->db->get('category');
			// if( $newquery->num_rows()>0)
			// {
			//	 $newarray=$newquery->row_array();
			//	 $newdata=array('no_of_times_viewed'=> $newarray['no_of_times_viewed']+1);
			//	 $this->db->where('category_id',$array['category_id']);
			//	 $this->db->update('category',$newdata);
			 //}
			 
			
			 return $query->row_array();
			 
		}
		
			public function get_category_name($ca_id)
			{
				 $this->db->where('category_id',$ca_id);
				 $query=$this->db->get('category');
				 if($query->num_rows()>0)
				 {
					$array=$query->row_array();
				 return $array['category_name'];
				 }
			}

///////////////////////////////////////////////                  Home Page           /////////////////////////////////////////////////////////////////////////
	

	
}
?>
	
