<?php
class Front extends CI_Controller{
    public  function view($page=''){
        $this->load->helper('url');
        // echo " Hello, " . $page;
        $data['pageName']=$page;
        $data['Info']="Information on Home Page";


        // Call View in View Folder, mean that home is a view name
        $this->load->view('home',$data);
    }

    public function person($id='',$name='',$age=''){
        $this->load->helper('url');

        // echo " ID :".$id. " Name : ".$name." age :".$age;
        $data['pageName']='Person Page';
        $data['Info']="This is the page of person";

        $this->load->view('person',$data);

    }

    public function page($page=''){
        $this->load->helper('url');
        
        // echo " ID :".$id. " Name : ".$name." age :".$age;
        $data['pageName']='Page of Boostrap';
        $data['Info']="This is the page of person";
        $data['col1']="Contact";
        $data['col2']="Like Page";
        $data['col3']="Address";

        $this->load->view('bootstrap',$data);

    }



}



