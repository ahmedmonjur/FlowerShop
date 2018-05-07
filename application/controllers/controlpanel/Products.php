<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @authors murshida (014murshida@gmail.com)
 * @date    2015-10-21 15:40:20
 */

class Products extends CI_Controller {
	function __construct(){
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->library('ckeditor');
		$this->load->library('ckfinder');
    	}
    
    	public function index(){
    	redirect('controlpanel/Products/all');
		}
		
   //---------------------------------------------------------------Start ( 1.Product View All)-------------------------------------------------------------
	   
     	public function all(){
			// pagination code start
			$this->load->library('pagination');

		    $config['base_url'] = site_url('controlpanel/products/all');
	        $config['total_rows'] = $this->db->get('product')->num_rows();
	        $config['enable_query_strings'] = TRUE;
	        $config['use_page_numbers'] = TRUE;
	        $config['query_string_segment'] = 'page';
	        $config['page_query_string'] = TRUE;
	        $config['per_page'] = 10;
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
                                                                    // ->get('product');
	        $this->pagination->initialize($config);

			$this->db->limit($config['per_page'], $data['segment'])->order_by('doc', 'asc');
			$this->db->from('product');
			$this->db->join('product_type','product.product_id = product_type.product_type_id');
			$query= $this->db->where('is_approved','1')->get();

	        $data['products'] = $query->result_array();

            $c=$this->db->select('category_id,category_name')->get('category');
            $data['category']=$c->result_array();

            $ns=$this->db->select('occasion_id,occasion_name')->get('occasion');
            $data['Occasions']=$ns->result_array();

          


		     	$data['tab']='tab3';
		     	$data['prefixLN']='../';
		     	$data['prefix']='';
		     	$data['profile']= $this->mhome->get_profile_info();	
				$this->load->view('controlpanel/left_nav',$data); //Showing page(Left Nav) of Product All in controlpanel

		     	$data['title']='Products';
				
		     	//$data['t1']=array(
		     		//	'name'=> 'Templates',
		     		//	'url' => 'all'

		     		//);
		     	//$data['t2']=array(
		     	//		'name'=>  'Pending items',
		     	//		'url' => 'pendings'

		     	//	);
		     	//$data['t3']=array(
		     	//		'name'=> 'Insert New',
		     	//		'url' => 'addnew'

		     	//	);
		     	//$data['t4']='';
		     	//$data['t5']='';
		     	//$data['t6']='';
		     //$data['t7']='';

     			$data['s_tab']='s_tab1';
     			//$this->load->view('controlpanel/menu_view',$data);
     			$this->load->view('controlpanel/products_view',$data);

     			//$this->load->view('controlpanel/left_nav',$data);
     		}

			
	/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

		
		
//-----------------------------------------------------Start ( 1.Add New Product Form) ------------------------------------------------------------

     	public function addnew(){
     			$data['tab']='tab3';
		     	$data['prefixLN']='../';
		     	$data['prefix']='';
		     	$data['profile']= $this->mhome->get_profile_info();	
		     	$this->load->view('controlpanel/left_nav',$data);//Showing (Left Nav) on ADD NEW page

		     	$data['title']='Products';
     			$data['s_tab']='s_tab3';
     			$query= $this->db->where('status','enable')->from('category')->group_by('category_name')->get();
     			$data['Categories']=$query->result_array();
				
				$query= $this->db->where('status','enable')->from('occasion')->group_by('occasion_name')->get();
     			$data['Occasions']=$query->result_array();

     			$q= $this->db->where('status','enable')->from('product_type')->group_by('product_type')->get();
     			$data['product_type']=$q->result_array();

     			
     			$this->load->view('controlpanel/pr_insert_view',$data);
     		}
			
	//////////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

	
  //-----------------------------------------------------Start ( 2.Add New Product Action) ----------------Product Insert Into Database----------------------------------------------

     		public function f_addpr(){

    			if ($this->input->post('prosubmit') !== null) {
     				$this->form_validation->set_rules('prTitle','Product Title:','required');
     				$this->form_validation->set_rules('caId', 'Category', 'required');
     				$this->form_validation->set_rules('ocId', 'Occasion', 'required');
     				$this->form_validation->set_rules('prtype', 'Product Type', 'required');
     				$this->form_validation->set_rules('prCode', 'Product Code', 'required');
     				$this->form_validation->set_rules('prprice', 'Product Unit price', 'required');
     				$this->form_validation->set_rules('discount', 'Discount');
					$this->form_validation->set_rules('des', 'Description', 'required');
					$this->form_validation->set_rules('quantity', 'Quantity', 'required');

					
		            $prTitle = $this->input->post('prTitle', TRUE);
		            $caId = $this->input->post('caId', TRUE);
		            $ocId = $this->input->post('ocId', TRUE);
		            $prtype = $this->input->post('prtype', TRUE);
		            $prCode = $this->input->post('prCode', TRUE);
		            $prprice = $this->input->post('prprice', TRUE);
		            $discount = $this->input->post('discount', TRUE);
					$des = $this->input->post('des', TRUE);
					$quantity = $this->input->post('quantity', TRUE);
					
		          
					//IMAGE	
					if ($this->form_validation->run())
					{

						$this->load->library('upload');

						if (!empty($_FILES['image']['name']))
						{
							$config['upload_path'] = './site_elements/Product_Image';
							$config['allowed_types'] = 'gif|jpg|png';
							$config['max_size'] = '100000';
							$config['max_width'] = '3000';
							$config['max_height'] = '3600';

							$config['encrypt_name']  = TRUE;  
								

							$this->upload->initialize($config);

							if ($this->upload->do_upload('image'))
							{
								$imagedata = $this->upload->data();
								$image_name = $imagedata['file_name'];
							}
							else
							{
								$this->session->set_flashdata('msg','<span class="text-danger">'.$this->upload->display_errors().'</span>');
								redirect('controlpanel/Products/addnew');

							}

						}

							//***********

							$token= md5(uniqid(mt_rand(),true));
							$data1 = array(
							'product_name' => $prTitle,
							'category_id' => $caId,
							'occasion_id' => $ocId,
							'product_type_id' => $prtype,
							'product_code' => $prCode,
							'product_unit_price' => $prprice,
							'discount' => $discount,
							'product_description' => $des,
							'quantity' => $quantity,
							
							
						   // 'is_approved' => '1',
							'status' => 'enable',
							'doc' => date("Y-m-d H:i:s"),
							'dom' => date("Y-m-d H:i:s"),
							'image' => $image_name,
							'token' => $token
							);
							$this->db->insert('product', $data1);
							

							$query=$this->db->select('product_id')->from('product')->where('token',$token)->get();
							$result=$query->result_array();
							foreach($result as $row){
								$parent_id= $row['product_id'];
							}
						
							$this->session->set_flashdata('msg','<span class="text-success" style="margin-left:20%">Successfully Uploaded !</span>');
							redirect('controlpanel/Products/addnew');
					}
					else
					{
						$this->session->set_flashdata('msg','<span class="text-danger">'.validation_errors().'</span>');
						redirect('controlpanel/Products/addnew');
					}
				}
			}

	/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////
  

  
   //---------------------------------------------------------------Start ( 1.Product View All)-------------------------------------------------------------
	   

			
	/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

   
   
   	//-----------------------------------------------------Start (2. Product Single view) -------------------------------------------------------------

				public function view($id){

					$this->ckeditor->basePath = base_url().'site_elements/ckeditor/';
					$this->ckeditor->config['toolbar'] = array(
									array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
																		);
					$this->ckeditor->config['language'] = 'it';
					$this->ckeditor->config['width'] = '730px';
					$this->ckeditor->config['height'] = '300px';            

					//Add Ckfinder to Ckeditor
					$this->ckfinder->SetupCKEditor($this->ckeditor,'../../../site_elements/ckfinder/'); 




					$data['tab']='tab3';
					$data['prefixLN']='../../';
					$data['prefix']='';
					$data['profile']= $this->mhome->get_profile_info();
					$this->load->view('controlpanel/left_nav',$data);

					$data['title']='Product';

					$data['t1']=array(
							'name'=> 'All Categories',
							'url' => '../all'

						);
					$data['t2']=array(
							'name'=> 'Pending items',
							'url' => '../pendings'
						);
					$data['t3']=array(
							'name'=> 'Insert New',
							'url' => '../addnew'
						);
					$data['t4']='';
					$data['t5']='';
					$data['t6']='';
					$data['t7']='';


					$data['s_tab']='s_tab1';

					$this->db->from('product');
					$this->db->join('product_type','product.product_id = product_type.product_type_id');
					$query= $this->db->where('product.product_id',$id)->get();
					$product=$query->result_array();
					$data['product'] = $product;

					foreach ($product as $key) {
						$ca_id=$key['category_id'];
						$oc_id=$key['occasion_id'];
						$pr_id=$key['product_type_id'];
						
						
					}
					$data['ca_id']=$ca_id;
					
					//CATEGORY
					$cn=$this->db->where('category_id',$ca_id)->get('category')->result_array();
					foreach ($cn as $key) {
						$data['ca_name']=$key['category_name'];
					}

					$query= $this->db->where('status','enable')->from('category')->group_by('category_name')->get();
					$data['categories']=$query->result_array();

					
					// OCCASION
					$query= $this->db->where('status','enable')->from('occasion')->group_by('occasion_name')->get();
					$data['Occasions']=$query->result_array();

					//PRODUCT TYPE
					$data['producttypes']= $this->db->where('status','enable')->from('product_type')->group_by('product_type')->get()->result_array();

					
					
					$this->load->view('controlpanel/pr_single_view',$data);

				}
   
   
   
   
   /////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

   			
   //-----------------------------------------------------Start ( 3.Product Update Action) -------------------------------------------------------------
			 public function update(){
				$this->form_validation->set_rules('prTitle','Product Title','required');
				$this->form_validation->set_rules('caId', 'Category', 'required');
				$this->form_validation->set_rules('ocId', 'Occasion', 'required');
				$this->form_validation->set_rules('prtype', 'Product Type', 'required');
				$this->form_validation->set_rules('prCode', 'Product Code', 'required');				
				$this->form_validation->set_rules('prprice', 'Product Unit price', 'required');								
				$this->form_validation->set_rules('discount', 'Discount');
				$this->form_validation->set_rules('des', 'Description', 'required');
				$this->form_validation->set_rules('quantity', 'Quantity', 'required');

				
				$prId = $this->input->post('pr_id', TRUE);
				$prTitle = $this->input->post('prTitle', TRUE);
				$caId = $this->input->post('caId', TRUE);
				$ocId = $this->input->post('ocId', TRUE);
				$prtype = $this->input->post('prtype', TRUE);
				$prCode = $this->input->post('prCode', TRUE);
				$prprice = $this->input->post('prprice', TRUE);
				$discount = $this->input->post('discount', TRUE);
				$des = $this->input->post('des', TRUE);
				$quantity = $this->input->post('quantity', TRUE);
				
				
			
				


				
				if($this->form_validation->run()) {
					$token= md5(uniqid(mt_rand(),true));
					$data1 = array(
					'product_name' => $prTitle,
					'category_id' => $caId,
					'occasion_id' => $ocId,
					'product_type_id' => $prtype,
					'product_code' => $prCode,
					'image' => $image_name,
					'product_unit_price' => $prprice,
					'discount' => $discount,
					'product_description' => $des,
					'quantity' => $quantity,
					'doc' => date("Y-m-d H:i:s"),
					'dom' => date("Y-m-d H:i:s"),
					'status' => 'enable',
					'token' => $token,
					
					);


					$this->db->where('product_id',$prId)->update('product', $data1);

					

					//$data2 = array(
					//'price' => $prPrice,
					//'layout' => $layout,
					//'high_resolution' => $h_resolution,
					//'bootstrap_version' => $b_version,
					//'compatable_browser' => $c_browser_list,
					//'free_future_updates' => $future_updates,
					//'preview_link' => $demourl,
					//'description' => $des
					//);

					//$this->db->where('product_id',$prId)->update('product_description', $data2);

					$this->session->set_flashdata('msg','<span class="text-success" style="margin-left:20%">Update Successfully !</span>');
					redirect('controlpanel/Products/view/'.$prId);
				}
				else{ 
					$this->session->set_flashdata('msg','<span class="text-danger">'.validation_errors().'</span>');
				redirect('controlpanel/Products/view/'.$prId);
				}
			}
   
   /////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

   
   
}
