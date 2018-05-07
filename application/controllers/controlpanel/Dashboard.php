<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends CI_Controller {
   // function __construct(){
       // parent::__construct();
        //$this->load->model('ControlPanel/Session_a');
        //$this->Session_a->check_s();
   // }
    
   // public function index(){
    	//redirect('controlpanel/Dashboard/General');
//}
   function index()
	{
	if( $this->input->get('message'))
			 {
				 $data['message']= $this->input->get('message');
			 }
		 else{
			 	$data['message']='';
			}
			if($this->session->userdata('logged_in')&&($this->session->userdata('username')=='murshida'))
		    {
		 	 $this->General();
		    }
			else{ $this->load->view('controlpanel/admin_login',$data); 
			}
	}
	function login()
	{
		if($this->input->post('submit'))
	     {
		
		 	$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
		    if($this->form_validation->run()==FALSE)
			{
		 		$this->load->view('controlpanel/admin_login');
			}
			else{
				if($this->mhome->login())
				{
					$message='welcome';
				}
				else{
					$message='username or password is invalid.';
				}
				
				redirect('/controlpanel/Dashboard/index/?message='.urlencode($message));

			}
		 }
	}
	function logged_in()
	{
		
		$this->load->view('controlpanel/Dashboard/General');
		 
	}
    public function General(){
            
          if($this->session->userdata('logged_in')&&($this->session->userdata('username')=='murshida'))
		 {
     		$data['tab']='tab1'; 
            $data['profile']= $this->mhome->get_profile_info();			
     		$this->load->view('controlpanel/left_nav',$data);// include left nav on dashboard
     		$data['title']='Dashboard';
     		$data['s_tab']='s_tab1';

     		$data['t1']=array(
                        'name'=> 'General',
                        'url' => 'General'

                    );
            $data['t2']='';  
            $data['t3']='';
            $data['t4']='';
            $data['t5']='';
            $data['t6']='';
            $data['t7']='';


           // $data['category'] = $this->db->get('category')->num_rows();
           // $data['product'] = $this->db->get('product')->num_rows();
           // $data['customer'] = $this->db->get('customer')->num_rows();
            
            
           // $this->db->from('product');
			//$this->db->join('product_type','product.product_id = product_type.product_type_id');//---------------------
            //$q=$this->db->where('is_approved','0')->order_by('date_added','desc')->limit(10)->get();
           // $data['pending_products']=$q->result_array();

            //$cquery=$this->db->select('id,name')->get('category');
            //$data['ca']=$cquery->result_array();

            //$cus=$this->db->select('id,username')->get('customer');
            //$data['cus']=$cus->result_array();

            //$sales_q=$this->db->order_by('date','desc')->limit(10)->get('sales');
            //$data['sales']=$sales_q->result_array();

            //$ca=$this->db->select('id,name')->get('category');
            //$data['category']=$ca->result_array();

          //  $data['w_rows']= $q->num_rows();
           // $data['s_rows']= $sales_q->num_rows();

     		$this->load->view('controlpanel/dashboard_view',$data);
		 }
     }
	 
	 function update_admin_info()
	 {	
		if($this->session->userdata('logged_in'))
		{	
			$data['tab']='tab1';   
		    $data['profile']= $this->mhome->get_profile_info();				
     		$this->load->view('controlpanel/left_nav',$data);// include left nav on dashboard
     		$data['title']='Dashboard';
     		$data['s_tab']='s_tab1';

     		$data['t1']=array(
                        'name'=> 'General',
                        'url' => 'General'

                    );
            $data['t2']='';  
            $data['t3']='';
            $data['t4']='';
            $data['t5']='';
            $data['t6']='';
            $data['t7']='';
			$data['profile_info']= $this->mhome->get_profile_info();
			$this->load->view('controlpanel/change_admin_data',$data); 
		}
	 }
	 function update_profile()
	//function to update admin profile
	{
		if($this->session->userdata('logged_in'))
		{
		 if($this->mhome->update_profile())
		 {
			$this->session->set_flashdata('msg',"profile info updated successfully");
		 }
		else{
			$this->session->set_flashdata('msg',"profile info is not updated. plz check and try again");
						
		 }
		redirect('controlpanel/Dashboard/');
		}
		else
		{
			redirect('controlpanel/Dashboard');
		}
		
	}

    function logout()
	{
		$this->session->sess_destroy();
		redirect('/controlpanel/Dashboard/?message=Logged+out');
				
	}

}
