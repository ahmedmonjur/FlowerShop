<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @authors Murshida Akter (murshida014@gmail.com)
 
 */

class Categories extends CI_Controller {
	

   
   
		//-----------------------------------------------------Start Category View All-------------------------------------------------------------

     	public function All(){ // Function Declare for (Category View All)
	       
			$this->load->library('pagination');

		    $config['base_url'] = site_url('controlpanel/categories/all');
	        $config['total_rows'] = $this->db->get('category')->num_rows();
	        $config['enable_query_strings'] = TRUE;
	        $config['use_page_numbers'] = TRUE;
	        $config['query_string_segment'] = 'page';
	        $config['page_query_string'] = TRUE;
	        $config['per_page'] = 15;
	        $config['num_links'] = 8;
	        $config['full_tag_open'] = '<ul class="pagination no-margin">';
	        $config['full_tag_close'] = '</ul>';
	        $config['cur_tag_open'] = '<li class="active"><a href="">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['prev_tag_open'] = '<li>';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['next_link'] = 'Next >';
	        $config['prev_link'] = '< Prev';


	        if ($this->input->get('page')){
	            $sgm = (int) trim($this->input->get('page'));
	            $data['segment'] = $config['per_page'] * ($sgm - 1);
	        } 
	        else {
	            $data['segment'] = 0;
	        }

	       $this->pagination->initialize($config);

	       $query = $this->db->limit($config['per_page'], $data['segment'])->order_by('category_name', 'asc')->get('category');
	        $data['categories'] = $query->result_array();

	        $q=$this->db->get('product');
	       $data['p_']=$q->result_array();





		     	$data['tab']='tab2';
		     	$data['prefixLN']='../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();	
				$this->load->view('controlpanel/left_nav',$data); //Showing page(Left Nav) of Category All in controlpanel
		     	
				// Define category header title
		     	$data['title']='Categories';
		     	$data['t1']=array(
		     			'name'=> 'Categories',// Define category part all 
		     			'url' => 'all'

		     		);
		     	$data['t2']=array(
		     			'name'=> 'New Category', //Define New category  
		     			'url' => 'addnew'

		     		);
		     
		     	
		     	$data['t3']='';
		     	$data['t4']='';
		     	$data['t5']='';

     			$data['s_tab']='s_tab1';
     			//$this->load->view('controlpanel/menu_view',$data);// Showing page(Menu View) of Category All in controlpanel
     			$this->load->view('controlpanel/categories_view',$data); //Showing page(Categories View) of Category All in controlpanel

     		}
			
			
			
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

		//-----------------------------------------------------Start Category View For (Edit/Reset)-------------------------------------------------------------
					
     		public function view($id){ // Function Declare for (Category  Single View) For Update/Reset

     			$data['tab']='tab2';
     			$data['prefixLN']='../../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();	
		     	$this->load->view('controlpanel/left_nav',$data);//Showing page(Left Nav) of Category View in controlpanel

		     	$data['title']='Categories Update/Edit';
	
		     	$data['t1']=array(
		     			'name'=> 'Categories',// Define category part all
		     			'url' => '../all'

		     		);
		     	$data['t2']=array(
		     			'name'=> 'New Category',//Define New category  
		     			'url' => '../addnew'

		     		);
		     
		     	$data['t3']='';
		     	$data['t4']='';
		     	$data['t5']='';
		     	$data['t6']='';
		     	$data['t7']='';


     			$data['s_tab']='s_tab1';
					


     			$query = $this->db->select('*')->from('category')->where('category_id',$id)->get();
	        	$data['info'] = $query->result_array();

	        	$data['category_name']='Category Name';	
				$data['category_code']='Category Code';
				$data['catalog']='Cataloge';
     			$data['action']=site_url('controlpanel/Categories/edit');  //Action for(Edit) in Controller page
	        	$data['lmod'] = '1';
	        	$data['des'] = '1';
	        	

				$this->load->view('controlpanel/ca_single_view',$data);// Showing page(Category Single View) of Category Single View page in controlpanel

     		}
						
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////
	
		//----------------------------------------- Start Category Edit (Action code) For (Update)------------------------------------------------------------
     		public function edit(){
     			if($this->input->post('caName'))
			    {
			    	$id = $this->input->post('id');///Confuse------------
			        $cacode = $this->input->post('caCode');///Confuse
			        $caname = $this->input->post('caName');///Confuse
					$des = $this->input->post('des');///Confuse
					$catalog = $this->input->post('catalog');///Confuse
					//$category_img = $this->input->post('category_img');///Confuse-----------
			        $status = $this->input->post('status');///Confuse
			        $dom= 

			        $info = array(
					    'category_code'          => $cacode,
					    'category_name'          => $caname,					   
					    'category_descrip'         => $des,
					    'catalog'         => $catalog,
					    //'category_img'         => $category_img
						 'status'        => $status,
					    'dom'	=> date("Y-m-d H:i:s")
					   );
				  	 $this->db->where('category_id', $id)->update('category', $info);///Confuse----------
					 redirect('controlpanel/categories/all');
			    }
     		}
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////
			
				
	//----------------------------------------- Start category (Add New Form)------------------------------------------------------------	
			
     	public function addnew(){ // Function Declare for (Add New) 
     			$data['tab']='tab2';
     			$data['prefixLN']='../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();	
		     	$this->load->view('controlpanel/left_nav',$data);//Showing (Left Nav) on ADD NEW page
				
				//$data['title']='Categories/Add New';//
		     	$data['title']='Categories';
	
		     	$data['t1']=array(
		     			'name'=> 'Categories',
		     			'url' => 'all'

		     		);
		     	$data['t2']=array(
		     			'name'=> 'New Category',
		     			'url' => 'addnew'

		     		);
		     
		     	$data['t3']='';
		     	$data['t4']='';
		     	$data['t5']='';
		     	$data['t6']='';
		     	$data['t7']='';


     			$data['s_tab']='s_tab2';

     			$data['category_code']='Category Code';
     			$data['category_name']='Category Name';
     			$data['catalog']='Catalog';
     			//$data['category_img']='Category Image';
     			$data['action']=site_url('controlpanel/Categories/create');  //Action for(Create) in controller
     			$data['des']='1';
				
				




     			$this->load->view('controlpanel/ca_insert_view',$data);//Showing (Menu View) on ADD NEW page
     			
     		}
			
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

		//----------------------------------------- Start  Create category---------Insert data into database-------------------------------------------------	
		
			public function Create(){

		  if($this->input->post('Name'))
		  {			     
			$cacode = $this->input->post('caCode');
			$caname = $this->input->post('Name');
			$des = $this->input->post('des');
			$catalog = $this->input->post('catalog');
			//$category_img = $this->input->post('category_img');///Confuse-----------
			$status = $this->input->post('status');


			$this->db->where('category_name',$caname);
			$num_rows=$this->db->count_all_results('category');
			
			
			
			  	

			  
				

			if($num_rows==0)
			{
				$info = array(
				
				  'category_code' => $cacode,
				  'category_name' => $caname,
				  'category_descrip' => $des,
				  'catalog' => $catalog,
				  //'category_img'=> $category_img,
				  'status' => $status,
				  'doc' => date("Y-m-d H:i:s")
				);

				$this->db->insert('category',$info);


				$this->session->set_flashdata('msg','<p class="msg text-success">Category Added Successfully !</p>');
				redirect('controlpanel/Categories/addnew');
			}
			else
			{	
				$this->session->set_flashdata('msg','<p class="msg text-danger">Category Already Exists !</p>');
				redirect('controlpanel/Categories/addnew');
			}
	  
		  redirect('controlpanel/Categories/addnew');

		  }
		  else{

		  

		  


			$this->session->set_flashdata('msg','<p class="msg text-danger">Insert a value in category name field !</p>');
			redirect('controlpanel/Categories/addnew');
		  }


		 }
		 
	 /////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

	 //----------------------------------------- Start  Delete category---------Delete data From database-------------------------------------------------	
	 
		 public function delete($id){
			$data['prefixLN']='';

			if($id != ''){
				$this->db->where('category_id',$id)->delete('category');
				redirect('controlpanel/categories/all');

			}
			


		 }
	 
	 /////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

	
	
	
	}
	
	
	
	
	