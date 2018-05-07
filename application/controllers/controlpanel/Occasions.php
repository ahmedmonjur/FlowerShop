<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @authors Murshida Akter (murshida014@gmail.com)
 
 */

class Occasions extends CI_Controller {
	

   
   
		//-----------------------------------------------------Start Occasions View All-------------------------------------------------------------

     	public function All(){ // Function Declare for (Occasions View All)
	        //$this->load->model('ControlPanel/General_Model');
			// pagination code start
			$this->load->library('pagination');

		    $config['base_url'] = site_url('controlpanel/occasions/all');
	        $config['total_rows'] = $this->db->get('occasion')->num_rows();
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

	       $query = $this->db->limit($config['per_page'], $data['segment'])->order_by('occasion_name', 'asc')->get('occasion');
	        $data['occasions'] = $query->result_array();
			
			 $q=$this->db->get('product');
	       $data['p_']=$q->result_array();





		     	$data['tab']='tab2';
		     	$data['prefixLN']='../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();
		     	$this->load->view('controlpanel/left_nav',$data); //Showing page(Left Nav) of Occasion All in controlpanel
				
				// Define Occasion header title
		     	$data['title']='Occasions';
		     	$data['t1']=array(
		     			'name'=> 'Occasions',// Define Occasion part all 
		     			'url' => 'all'

		     		);
		     	$data['t2']=array(
		     			'name'=> 'New Occasion', //Define New Occasion  
		     			'url' => 'addnew'

		     		);
		     
		     	
		     	$data['t3']='';
		     	$data['t4']='';
		     	$data['t5']='';

     			$data['s_tab']='s_tab1';
     			//$this->load->view('controlpanel/menu_view',$data);// Showing page(Menu View) of Occasion All in controlpanel
     			$this->load->view('controlpanel/occasions_view',$data); //Showing page(Occasions View) of Occasion All in controlpanel

     		}
			
			
			
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

		//-----------------------------------------------------Start Occasion View For (Edit/Reset)-------------------------------------------------------------
					
     		public function view($id){ // Function Declare for (Occasion  Single View) For Update/Reset

     			$data['tab']='tab2';
     			$data['prefixLN']='../../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();
		     	$this->load->view('controlpanel/left_nav',$data);//Showing page(Left Nav) of Occasion View in controlpanel

		     	$data['title']='Occasions Update/Edit';
	
		     	$data['t1']=array(
		     			'name'=> 'Occasions',// Define Occasion part all
		     			'url' => '../all'

		     		);
		     	$data['t2']=array(
		     			'name'=> 'New Occasions',//Define New Occasion  
		     			'url' => '../addnew'

		     		);
		     
		     	$data['t3']='';
		     	$data['t4']='';
		     	$data['t5']='';
		     	$data['t6']='';
		     	$data['t7']='';


     			$data['s_tab']='s_tab1';
     			//$this->load->view('controlpanel/menu_view',$data);// Showing page(Menu View) of Occasion Single View in controlpanel

     			$query = $this->db->select('*')->from('occasion')->where('occasion_id',$id)->get();
	        	$data['info'] = $query->result_array();

	        	$data['occasion_name']='Occasion Name';	
     			$data['action']=site_url('controlpanel/Occasions/edit');  //Action for(Edit) in Controller page
	        	$data['lmod'] = '1';
	        	$data['des'] = '1';
	        	

				$this->load->view('controlpanel/oc_single_view',$data);// Showing page(Occasion Single View) of Occasion Single View page in controlpanel

     		}
						
						
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////
	
		//----------------------------------------- Start  //   Occasion Edit (Action code) For (Update)------------------------------------------------------------
     		public function edit(){
     			if($this->input->post('ocName'))
			    {
			    	$id = $this->input->post('id');///Confuse------------
			        $caname = $this->input->post('ocName');///Confuse
					$des = $this->input->post('des');///Confuse
					//$category_img = $this->input->post('category_img');///Confuse-----------
			        $status = $this->input->post('status');
			        $dom= 

			        $info = array(
					    'occasion_name'          => $caname,					   
					    'description'         => $des,
					 
						'status'        => $status,
					    'dom'	=> date("Y-m-d H:i:s")
					   );
				  	 $this->db->where('occasion_id', $id)->update('occasion', $info);
					 redirect('controlpanel/occasions/all');
			    }
     		}
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////
			
				
	//----------------------------------------- Start Occasion (Add New Form)------------------------------------------------------------	
			
     	public function addnew(){ // Function Declare for (Add New) 
     			$data['tab']='tab2';
     			$data['prefixLN']='../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();
		     	$this->load->view('controlpanel/left_nav',$data);//Showing (Left Nav) on ADD NEW page

		     	$data['title']='Occasions/Add New';
	
		     	$data['t1']=array(
		     			'name'=> 'Occasions',
		     			'url' => 'all'

		     		);
		     	$data['t2']=array(
		     			'name'=> 'New Occasion',
		     			'url' => 'addnew'

		     		);
		     
		     	$data['t3']='';
		     	$data['t4']='';
		     	$data['t5']='';
		     	$data['t6']='';
		     	$data['t7']='';


     			$data['s_tab']='s_tab2';

     			$data['occasion_name']='Occasion Name';
     			$data['action']=site_url('controlpanel/Occasions/create');  //Action for(Create) in controller
     			$data['des']='1';




     			//$this->load->view('controlpanel/menu_view',$data);//Showing (Menu View) on ADD NEW page
     			$this->load->view('controlpanel/oc_insert_view',$data);//Showing (Menu View) on ADD NEW page
     			
     		}
			
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

		//----------------------------------------- Start  Create occasion---------Insert data into database-------------------------------------------------	
		
			public function Create(){

		  if($this->input->post('Name'))
		  {			     
			$ocname = $this->input->post('Name');
			$des = $this->input->post('des');
			$status = $this->input->post('status');
			

			$this->db->where('occasion_name',$ocname);//confuse
			$num_rows=$this->db->count_all_results('occasion');

			if($num_rows==0)
			{
				$info = array(
				
				  'occasion_name' => $ocname,
				  'description' => $des,
				  'status' => $status,
				  'doc' => date("Y-m-d H:i:s")
				  
				);

				$this->db->insert('occasion',$info);

			  

				$this->session->set_flashdata('msg','<p class="msg text-success">Occasion Added Successfully !</p>');
				redirect('controlpanel/Occasions/addnew');
			}
			else
			{	
				$this->session->set_flashdata('msg','<p class="msg text-danger">Occasion Already Exists !</p>');
				redirect('controlpanel/Occasions/addnew');
			}
	  
		  redirect('controlpanel/Occasions/addnew');

		  }
		  else{

		  

		  


			$this->session->set_flashdata('msg','<p class="msg text-danger">Insert a value in Occasion name field !</p>');
			redirect('controlpanel/Occasions/addnew');
		  }


		 }
		 
	 /////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

	 //----------------------------------------- Start  Delete Occasion---------Delete data From database-------------------------------------------------	
	 
		
		  public function delete($id){
		

			if($id != ''){
				$this->db->where('occasion_id',$id)->delete('occasion');
				redirect('controlpanel/occasions/all');

			}
			


		 }
	 
	 /////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

	
	
	
	}
	
	
	
	
	