<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @authors Murshida Akter (murshida014@gmail.com)
 
 */

class Product_type extends CI_Controller {
	

   
   
		//-----------------------------------------------------Start Product_type View All-------------------------------------------------------------

     	public function All(){ // Function Declare for (Product_type View All)
	        //$this->load->model('ControlPanel/General_Model');
			// pagination code start
			$this->load->library('pagination');

		    $config['base_url'] = site_url('controlpanel/Product_type/all');
	        $config['total_rows'] = $this->db->get('product_type')->num_rows();
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

	       $query = $this->db->limit($config['per_page'], $data['segment'])->order_by('	product_type', 'asc')->get('product_type');
	        $data['Product_type'] = $query->result_array();

	        //$q=$this->db->get('product');
	      // $data['p_']=$q->result_array();





		     	$data['tab']='tab2';
		     	$data['prefixLN']='../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();
				$this->load->view('controlpanel/left_nav',$data); //Showing page(Left Nav) of Product_type All in controlpanel
		     	
				
		     	$data['title']='Product Type';
		     	
		    
     			$data['s_tab']='s_tab1';
     			$this->load->view('controlpanel/products_type_view',$data); 

     		}
			
			
			
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

		//-----------------------------------------------------Start Product_type View For (Edit/Reset)-------------------------------------------------------------
					
     			public function view($id){ // Function Declare for (Category  Single View) For Update/Reset

     			$data['tab']='tab2';
     			$data['prefixLN']='../../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();	
		     	$this->load->view('controlpanel/left_nav',$data);//Showing page(Left Nav) of Category View in controlpanel

		     	$data['title']='Product type Update/Edit';
	

     			$data['s_tab']='s_tab1';
					


     			$query = $this->db->select('*')->from('product_type')->where('product_type_id',$id)->get();
	        	$data['info'] = $query->result_array();

	        	$data['product_type']='Product Type';	
				$data['status']='Status';
     			$data['action']=site_url('controlpanel/Product_type/edit');  //Action for(Edit) in Controller page
	        	
	        	

				$this->load->view('controlpanel/prtype_single_view',$data);// Showing page(Category Single View) of Category Single View page in controlpanel

     		}
						
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////
	
		//----------------------------------------- Start Product_type Edit (Action code) For (Update)------------------------------------------------------------
     		public function edit(){
     			if($this->input->post('prtype'))
			    {
			    	$id = $this->input->post('id');///Confuse------------
			        $prtype = $this->input->post('prtype');///Confuse
			        $status = $this->input->post('status');///Confuse

			        $info = array(
					    'product_type'          => $prtype,					   
						 'status'        => $status,
					    'doc'	=> date("Y-m-d H:i:s"),
					   );
				  	 $this->db->where('product_type_id', $id)->update('product_type', $info);///Confuse----------
					 redirect('controlpanel/product_type/all');
			    }
     		}
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////
			
				
	   //-----------------------------------------------------Start ( 1.Add Product Type Form) ------------------------------------------------------------

     	public function addprtype(){
     			$data['tab']='tab4';
		     	$data['prefixLN']='../';
		     	$data['prefix']='';
				
				$data['profile']= $this->mhome->get_profile_info();
		     	$this->load->view('controlpanel/left_nav',$data);

		     	$data['title']='Products Type';
	
		     	$data['t1']=array(
		     			'name'=> 'Product List',
		     			'url' => 'all'

		     		);
		     	$data['t2']=array(
		     			'name'=> 'Product Pending list',
		     			'url' => 'pendings'

		     		);
		     	$data['t3']=array(
		     			'name'=> 'Insert New Product',
		     			'url' => 'addnew'

		     		);
				$data['t4']=array(
					'name'=> 'Add Product Type',
					'url' => 'addprtype'

				);

		     	$data['t5']='';
		     	$data['t6']='';
		     	$data['t7']='';

     			$data['s_tab']='s_tab4';
				$data['product_type']='Product Type';
				$data['action']=site_url('controlpanel/Product_type/Createtype');  //Action for(Create) in controller

	
     			$this->load->view('controlpanel/prtype_insert_view',$data);
     		}
				
				/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

			      //-----------------------------------------------------Start ( 2.Add Product Type Action) ----------------Product Insert Into Database----------------------------------------------

     			public function Createtype(){

				    if($this->input->post('prtype'))
					  {			     
						$prt = $this->input->post('prtype');
						$status = $this->input->post('status');

						

						$this->db->where('product_type',$prt);//confuse
						$num_rows=$this->db->count_all_results('product_type');

						if($num_rows==0)
						{
							$info = array(
							
							  'product_type' => $prt,
							   'status' => $status,
								'doc' => date("Y-m-d H:i:s")
							);

							$this->db->insert('product_type',$info);	
						
							redirect('controlpanel/Product_type/addprtype');
						}	
						else
						redirect('controlpanel/Product_type/addprtype');
					}
				}
		
				/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

	 //----------------------------------------- Start  Delete product type---------Delete data From database-------------------------------------------------	
	 
		 public function delete($id){
			$data['prefixLN']='';

			if($id != ''){
				$this->db->where('product_type_id',$id)->delete('product_type');
				redirect('controlpanel/Product_type/all');

			}
			


		 }
	 
	 /////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

	
	
	
	}
	
	
	
	
	