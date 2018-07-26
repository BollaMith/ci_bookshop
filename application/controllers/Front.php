<?php
class Front extends CI_Controller{

<<<<<<< HEAD

=======
>>>>>>> 031aeb766e34d6d655be4b4408036ce97f7f8a9c
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


<<<<<<< HEAD

=======
>>>>>>> 031aeb766e34d6d655be4b4408036ce97f7f8a9c
    public  function view($page=''){
        $this->load->helper('url');
        
        $data['pageName']=$page;
        $data['Info']="Information on Home Page";
        $this->load->view('front/home',$data);

       
    }



}



