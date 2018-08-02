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
    	$data=array();

		$sql_detail="SELECT * FROM products WHERE pro_id=".$proid;
		$data['pro_detail']=$this->mProduct->get_by_sql($sql_detail);

		$sql_relate_pro="SELECT * FROM products WHERE pro_id<>".$proid;
		$data['pro_related']=$this->mProduct->get_by_sql($sql_relate_pro);


	    $data['proid']=$proid;
	    $data['Info']="Information on Home Page";
	    $data['hotcategory']='hot_category';
	    $data['brandShowCase']='brand_show_case';

    $this->load->view('front/detail',$data);
  }



}

