<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @authors murshida 
 * @date   
 */

class Filter extends CI_Controller {
    function __construct(){
    	parent::__construct();
        
    }
    public function index(){
    	redirect('home');
    }
    public function scale($name){
	 	if($name == null)
	 	{
	 		redirect('home');
	 	}
	 	else 
	 	{
	     	$data['name'] = $name;
         

	

		

			 if($name=='newitems')
			{
				
				//New Items
				//$data['name']='New Items';
				//$this->db->from('product');
				//$this->db->join('occasion','product.product_id = occasion.occasion_id');
				//$newitems= $this->db->where('occasion_name','Holud')->order_by('doc','desc')->limit(24)->get();
				//$data['results'] = $newitems->result_array();
				//$data['row'] = $newitems->num_rows();
				//New Items
			}
	
			else
			{
	 			redirect('home');
			}

			$this->load->view('filter_view',$data);
		}
	}
}