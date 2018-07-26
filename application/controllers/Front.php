<?php
class Front extends CI_Controller{

    public  function view($page=''){
        $this->load->helper('url');
        
        $data['pageName']=$page;
        $data['Info']="Information on Home Page";
        $this->load->view('front/home',$data);

       
    }



}



