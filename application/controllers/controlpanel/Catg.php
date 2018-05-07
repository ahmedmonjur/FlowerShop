<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @authors Murshida Akter (murshida014@gmail.com)
 
 */

class Catg extends CI_Controller {
	
		//----------------------------------------- Start category (Add New Form)------------------------------------------------------------	
			
     	public function addnew(){ // Function Declare for (Add New) 
     			$data['tab']='tab2';
     			$data['prefixLN']='../';
		     	$data['prefix']='';
				$data['profile']= $this->mhome->get_profile_info();	
		     	$this->load->view('controlpanel/left_nav',$data);//Showing (Left Nav) on ADD NEW page
				
				//$data['title']='Categories/Add New';//
		     	$data['title']='Categoriess';
	
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

     			//$data['category_code']='Category Code';
     			$data['category_name']='Category Name';
     			$data['category_img']='Category Image';
     			$data['action']=site_url('controlpanel/Catg/create');  //Action for(Create) in controller
     			//$data['des']='1';
				
				




     			$this->load->view('controlpanel/cat_img',$data);//Showing (Menu View) on ADD NEW page
     			
     		}
			
		/////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////

		
		//----------------------------------------- Start  Create category---------Insert data into database-------------------------------------------------	
		
			public function Create(){

		  if($this->input->post('Name'))
		  {			     
			$cacode = $this->input->post('caCode');
			$caname = $this->input->post('Name');
			$des = $this->input->post('des');
			$category_img = $this->input->post('category_img');///Confuse-----------
			$status = $this->input->post('status');


			$this->db->where('category_name',$caname);
			$num_rows=$this->db->count_all_results('category');
			
			
			
			  	

			        $this->load->library('upload');

			        if (!empty($_FILES['category_img']['name']))
			        {
			            $config['upload_path'] = './site_elements/image';
			            $config['allowed_types'] = 'png,jpg,JPG';
			            $config['max_size'] = '2000';
			            $config['max_width']  = '850';
			            $config['min_width']  = '850';
			            $config['max_height']  = '660';
			            $config['min_height']  = '660';

			            $config['encrypt_name']  = TRUE;  
			                

			            $this->upload->initialize($config);

			            if ($this->upload->do_upload('category_img'))
			            {
			                $category_imgdata = $this->upload->data();
			                $image_name = $category_imgdata['file_name'];
			            }
			            else
			            {
			                $this->session->set_flashdata('msg','<span class="text-danger">'.$this->upload->display_errors().'</span>');
           					redirect('controlpanel/Products/addnew');

			            }

			        }
				

			if($num_rows==0)
			{
				$info = array(
				
				 // 'category_code' => $cacode,
				  'category_name' => $caname,
				  //'category_descrip' => $des,
				  'category_img'=> $category_img,
				  //'status' => $status,
				  //'doc' => date("Y-m-d H:i:s")
				);

				$this->db->insert('category',$info);


				$this->session->set_flashdata('msg','<p class="msg text-success">Category Added Successfully !</p>');
				redirect('controlpanel/Catg/addnew');
			}
			else
			{	
				$this->session->set_flashdata('msg','<p class="msg text-danger">Category Already Exists !</p>');
				redirect('controlpanel/Catg/addnew');
			}
	  
		  redirect('controlpanel/Catg/addnew');

		  }
		  else{

		  

		  


			$this->session->set_flashdata('msg','<p class="msg text-danger">Insert a value in category name field !</p>');
			redirect('controlpanel/Catg/addnew');
		  }


		 }
		 
	 /////////////////////////////////////////////////////////////////////END//////////////////////////////////////////////////////////////////////////////


			function update_Catg()
			{
				$this->form_validation->set_rules('category_name','category_name','required');
			   // $this->form_validation->set_rules('password','Password','required');
				if($this->form_validation->run()==FALSE)
				{
					echo   validation_errors();
				}
				else{//if main image has been sent save the image and get the file name
					if($_FILES["category_img"]["size"]>0)
					{
						$config['upload_path'] = './site_elements/control panel/images';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size'] = '100000';
						$config['max_width'] = '2000';
						$config['max_height'] = '1600';
						$this->upload->initialize($config);
						if(!$this->upload->do_upload('category_img'))
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
						$category_img=$upload_data['file_name'];
					}
					else{
						$category_img= $this->input->post('image');
					}
					 $category_id=$this->input->post('category_id');
					$category_img_array=array(
						'category_name' => $this->input->post('category_name'),
						'category_img' =>$category_img,
						);
						$this->db->where('category_id',$category_id);
						$this->db->update('category',$category_img_array);
						return TRUE;
				}
			}
			function get_Catg_info()
			{
				$query=$this->db->get('category');
				$array=$query->result_array();
				return $array;
			}
	
	
}
	
	
	
	
	