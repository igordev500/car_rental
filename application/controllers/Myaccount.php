<?php
/**
 * 
 */
class Myaccount extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
    }
    
    public function index(){
        $var['title']="My account | Bananacampers";
        $this->load->view('components/header',$var);
        $this->load->view('userpage/components/header');
        $this->load->view('userpage/myaccount');
        $this->load->view('components/footer');
    }

}
?>