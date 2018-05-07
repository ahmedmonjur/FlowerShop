<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		//	$this->load->view('Home_view');
		$data['lat_prods']= $this->mhome->get_latest_products();
		$data['Occasions']= $this->mhome->Occasions();
		$data['product_type']= $this->mhome->product_type();
		$data['Category']= $this->mhome->Category();

		
		//$data['categories']= $this->mhome->get_most_viewed_categories();
		//$data['b']=$this->cart->contents();
		
	
	
	
	
	
	
		$this->load->view('Home_vieww',$data);
		
		
		
		/////////////////////////////////////////////////////            HOME PAGE          //////////////////////////////////////////////////////////	

		
		
		


	
	
	
	}
	
	/////////////////////////////////////////////////////  Home Page  (Product Single View Details)          //////////////////////////////////////////////////////////	
			//public function cart()
			//{
			//	$a['b']=$this->cart->contents();
			//	$b=count($a);
			//	print_r($a['b']);
			//	echo $b;
			
			//}
			// 1.Product (Single_product_view)---------------------------------------------------
		public function product($id=NULL)
			{
				 if(is_null($id))
				 {
					redirect('/index');
				}
				else
				 {	 
					 //$data['header']= $this->mhome->get_header();
					 $data['product']= $this->mhome->get_product($id);
					 $data['categories']= $this->mhome->get_categories($id);  
					// $data['most_categories']= $this->mhome->get_most_viewed_categories();
					// $data['men_categories']= $this->mhome->men_categories();
					// $data['women_categories']= $this->mhome->women_categories();
					// $data['footwear_categories']= $this->mhome->footwear_categories();
					// $data['keyword']= $this->mhome->keyword($id);
					 //$data['similar_products']= $this->mhome->similar_products($id);
					// $data['comments']= $this->mhome->get_comments($id);
					// $data['footer']= $this->mhome->get_footer();
					 //$data['b']=$this->cart->contents();
					 $this->load->view('Single_product_view',$data);
					 }
			}
			
///////////////////////////////////////////////////////////      Category page (code)      ////////////////////////////////////////////////////////////
		//1.Occasions product
		public function Occasions_product($id=NULL)
		{   
			 
			 if(is_null($id))
			 {
				redirect('/index');
			 }
			 else
			 {	 
				 
				 $data['occasions_product']= $this->mhome->occasions_product($id);
				 $data['occasions_name']= $this->mhome->get_occasions_name($id);
				 $data['Occasions']= $this->mhome->Occasions();
				// $data['categories']= $this->mhome->get_most_viewed_categories();
				// $data['womenfeatured_products']=$this->mhome->get_women_featured_products();
				// $data['featured_products']= $this->mhome->similar_products($id);
				// $data['brands']= $this->mhome->get_most_viewed_brands();
				// $data['men_categories']= $this->mhome->men_categories();
				// $data['women_categories']= $this->mhome->women_categories();
				// $data['footwear_categories']= $this->mhome->footwear_categories();
				//  $data['b']=$this->cart->contents();
				 if($data['occasions_product']==null)
						{
							$data['no_product'] ='no result found';
							 $this->load->view('occasion_detail',$data);
							
						}
						else{
							$data['b']=$this->cart->contents();
						 $this->load->view('occasion_detail',$data);
						}
				 }
		}
		
		//2.Product_type_detail     Category page (code) //		
		public function category_product_type($id=NULL)
		{   
			 
			 if(is_null($id))
			 {
				redirect('/index');
			 }
			 else
			 {	 
				 
				 $data['category_product_type']= $this->mhome->category_product_type($id);
				 $data['product_type']= $this->mhome->get_product_type($id);
				 $data['product_type']= $this->mhome->product_type();
				// $data['categories']= $this->mhome->get_most_viewed_categories();
				// $data['womenfeatured_products']=$this->mhome->get_women_featured_products();
				// $data['featured_products']= $this->mhome->similar_products($id);
				// $data['brands']= $this->mhome->get_most_viewed_brands();
				// $data['men_categories']= $this->mhome->men_categories();
				// $data['women_categories']= $this->mhome->women_categories();
				// $data['footwear_categories']= $this->mhome->footwear_categories();
				//  $data['b']=$this->cart->contents();
				 if($data['category_product_type']==null)
						{
							$data['no_product'] ='no result found';
							 $this->load->view('product_type_detail',$data);
							
						}
						else{
							$data['b']=$this->cart->contents();
						 $this->load->view('product_type_detail',$data);
						}
				 }
		}
	
		//3.Category detail //	
		public function category_product($id=NULL)
		{   
			 
			 if(is_null($id))
			 {
				redirect('/index');
			 }
			 else
			 {	 
				 
				 $data['category_product']= $this->mhome->category_product($id);
				// $data['occasions_name']= $this->mhome->get_occasions_name($id);
				 $data['Category']= $this->mhome->Category();
				// $data['categories']= $this->mhome->get_most_viewed_categories();
				// $data['womenfeatured_products']=$this->mhome->get_women_featured_products();
				// $data['featured_products']= $this->mhome->similar_products($id);
				// $data['brands']= $this->mhome->get_most_viewed_brands();
				// $data['men_categories']= $this->mhome->men_categories();
				// $data['women_categories']= $this->mhome->women_categories();
				// $data['footwear_categories']= $this->mhome->footwear_categories();
				//  $data['b']=$this->cart->contents();
				 if($data['category_product']==null)
						{
							$data['no_product'] ='no result found';
							 $this->load->view('category_detail',$data);
							
						}
						else{
							$data['b']=$this->cart->contents();
						 $this->load->view('category_detail',$data);
						}
				 }
		}
///////////////////////////////////////////////////////////      END      ////////////////////////////////////////////////////////////

	
}
?>