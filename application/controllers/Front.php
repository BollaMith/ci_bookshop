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

		$sql_menu_cat="SELECT cat.cat_id,cat.pro_cat_name,cat.pro_cat_icon,cat.pro_cat_img,count(cat.cat_id) as subcount
			FROM categories as cat INNER JOIN category_sub1 as cats1
			ON cat.cat_id=cats1.cat_id
			GROUP BY cat.cat_id";
		$data['menu_category']=$this->mProduct->get_by_sql($sql_menu_cat);

		$sql_cat_sub1="SELECT cats2.*,cats1.subcat_name,cats1.sub_cat1_id,cats1.cat_id
		FROM category_sub1 as cats1 INNER JOIN category_sub2 as cats2 ON cats1.sub_cat1_id=cats2.sub_cat1_id GROUP BY cats2.sub_cat1_id";
		$data['menu_cat_sub1']=$this->mProduct->get_by_sql($sql_cat_sub1);

		$sql_cat_sub2="SELECT * FROM category_sub2";
		$data['menu_cat_sub2']=$this->mProduct->get_by_sql($sql_cat_sub2);


		$this->load->view('front/home',$data);
	}

	// Category
	public function category($param1='',$param2='',$param3=''){
		$data=array();
		$data['param1']=$param1;
		$data['param2']=$param2;
		$data['param3']=$param3;

		$data['pageName']=$param1;
		$data['Info']="Information on Home Page";
		$data['hotcategory']='hot_category';
		$data['brandShowCase']='brand_show_case';

		$sql_best_seller="SELECT * FROM products";
		$data['best_seller']=$this->mProduct->get_by_sql($sql_best_seller);

		$sql_menu_cat="SELECT cat.cat_id,cat.pro_cat_name,cat.pro_cat_icon,cat.pro_cat_img,count(cat.cat_id) as subcount
			FROM categories as cat INNER JOIN category_sub1 as cats1 ON cat.cat_id=cats1.cat_id GROUP BY cat.cat_id";
		$data['menu_category']=$this->mProduct->get_by_sql($sql_menu_cat);

		$sql_cat_sub1="SELECT cats2.*,cats1.subcat_name,cats1.sub_cat1_id,cats1.cat_id
		FROM category_sub1 as cats1 INNER JOIN category_sub2 as cats2 ON cats1.sub_cat1_id=cats2.sub_cat1_id GROUP BY cats2.sub_cat1_id";
		$data['menu_cat_sub1']=$this->mProduct->get_by_sql($sql_cat_sub1);

		$sql_cat_sub2="SELECT * FROM category_sub2";
		$data['menu_cat_sub2']=$this->mProduct->get_by_sql($sql_cat_sub2);


		$sqlProCatList="SELECT * FROM products as p WHERE p.subcat2_id=". $param2;
		$data['ProCatList']=$this->mProduct->get_by_sql($sqlProCatList);
		



		$this->load->view('front/category/category',$data);
	}

		



}



