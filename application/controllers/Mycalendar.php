<?php
/**
 * 
 */
class Mycalendar extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        // $this->load->model('calendar_m');
        $this->load->library('calendar');
    }
    
    public function index(){
        $var['title']="My calendar | Bananacampers";
        $this->load->view('components/header',$var);
        $this->load->view('components/footer_new');
        // $this->load->view('userpage/components/header');
        $this->load->view('userpage/mycalendar');
        
        
    }

    public function calendar()
    {
        // echo ($this->calendar->adjust_date(13, 2014));
    }

}
?>