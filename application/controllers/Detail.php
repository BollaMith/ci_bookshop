<?php
class Detail extends CI_Controller{

  public function index($proid=''){
    $this->load->helper('url');
    $data['proid']=$proid;
    $data['Info']="Information on Home Page";
    $data['hotcategory']='hot_category';
    $data['brandShowCase']='brand_show_case';
    $this->load->view('front/detail',$data);
  }



}

