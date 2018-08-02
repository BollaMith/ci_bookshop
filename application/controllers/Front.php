<?php
class Front extends CI_Controller{
	public function __construct()
		{
		    parent::__construct();
			
			$this->load->helper('url');
		    $this->load->model('M_Products','mProduct'); 

		    //Load Library and model.
			//$this->load->library('cart');
			//$this->load->model('billing_model');

		}



	public function index($page=''){

		$data['pageName']=$page;
		$data['Info']="Information on Home Page";
		$data['hotcategory']='hot_category';
		$data['brandShowCase']='brand_show_case';

		$sql_best_seller="SELECT * FROM products";
		$data['best_seller']=$this->mProduct->get_by_sql($sql_best_seller);




		$this->load->view('front/home',$data);
	}

		



}



