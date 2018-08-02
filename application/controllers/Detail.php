<?php
class Detail extends CI_Controller{
	public function __construct()
		{
		    parent::__construct();
			
			$this->load->helper('url');
		    $this->load->model('M_Products','mProduct'); 

		    //Load Library and model.
			//$this->load->library('cart');
			//$this->load->model('billing_model');

		}

  public function index($proid=''){
    $this->load->helper('url');

		$sql_detail="SELECT * FROM products WHERE pro_id=".$proid;
		$data['pro_detail']=$this->mProduct->get_by_sql($sql_detail);

	    $data['proid']=$proid;
	    $data['Info']="Information on Home Page";
	    $data['hotcategory']='hot_category';
	    $data['brandShowCase']='brand_show_case';

    $this->load->view('front/detail',$data);
  }



}

