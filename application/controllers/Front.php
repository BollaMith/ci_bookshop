<?php
class Front extends CI_Controller{

<<<<<<< HEAD
=======
	public function index($page=''){
		$this->load->helper('url');
		$data['pageName']=$page;
		$data['Info']="Information on Home Page";
		
		// Hot Category
		// $data['hotcategory']='';
		$data['hotcategory']='hot_category';

		//Brand Show Case
		$data['brandShowCase']='brand_show_case';

		$this->load->view('front/home',$data);
	}


>>>>>>> fabfd12d11acb520763be99fc09bdbe75060e049
    public  function view($page=''){
        $this->load->helper('url');
        
        $data['pageName']=$page;
        $data['Info']="Information on Home Page";
        $this->load->view('front/home',$data);

       
    }



}



