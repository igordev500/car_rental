<?php
/**
 * 
 */
class Myaccount extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('user_m');
    }
    
    public function index(){
        $var['title']="My account | Bananacampers";
        $this->load->view('components/header',$var);
        $this->load->view('components/footer_new');
        $this->load->view('userpage/components/header');
        $this->load->view('userpage/myaccount');
        
    }

    public function get_profile()
    {
        $profile =  $this->user_m->get_profile();
        echo json_encode($profile);
    }

    public function up_identity()
    {
        $first = $this->input->post('first');
        $last = $this->input->post('last');
        $phone_num = $this->input->post('phone_num');
        $birth = $this->input->post('birth');
        $address = $this->input->post('address');
        $this->user_m->update_identity($first,$last,$phone_num,$address,$birth);
    }

    function up_description(){
        $description = $this->input->post('description');
        $this->user_m->up_description($description);
    }

    function up_picture(){
        $ph = $_FILES['picture'];
        $o_name= $ph['name'];
        $x = explode('.', $o_name);
        $exten = end($x);       
        $upload_name = time().'.'.$exten;

        @move_uploaded_file($_FILES['picture']['tmp_name'], './uploads/user_pictures/'.$upload_name);
        $this->user_m->up_picture($upload_name);
    }

    public function up_doc()
    {
        $ph1 = $_FILES['drive_doc'];
        $ph2 = $_FILES['identity'];
        $o_name1= $ph1['name'];
        $o_name2= $ph2['name'];
        $x1 = explode('.', $o_name1);
        $x2 = explode('.', $o_name2);
        $exten1 = end($x1);       
        $exten2 = end($x2);       
        $upload_name1 = time().'1.'.$exten1;
        $upload_name2 = time().'2.'.$exten2;

        @move_uploaded_file($_FILES['drive_doc']['tmp_name'], './uploads/driving_license/'.$upload_name1);
        @move_uploaded_file($_FILES['identity']['tmp_name'], './uploads/identity_cards/'.$upload_name2);

        $this->user_m->up_doc($upload_name1,$upload_name2);
    }

    public function up_doc1()
    {
        $ph1 = $_FILES['drive_doc'];
        $o_name1= $ph1['name'];
        $x1 = explode('.', $o_name1);
        $exten1 = end($x1);       
        $upload_name1 = time().'1.'.$exten1;

        @move_uploaded_file($_FILES['drive_doc']['tmp_name'], './uploads/driving_license/'.$upload_name1);

        $this->user_m->up_doc1($upload_name1);
    }

    public function up_doc2()
    {
        $ph2 = $_FILES['identity'];
        $o_name2= $ph2['name'];
        $x2 = explode('.', $o_name2);
        $exten2 = end($x2);       
        $upload_name2 = time().'2.'.$exten2;

        @move_uploaded_file($_FILES['identity']['tmp_name'], './uploads/identity_cards/'.$upload_name2);

        $this->user_m->up_doc2($upload_name2);
    }

    public function change_pw()
    {
        $old = $this->input->post('old');
        $newpw = $this->input->post('newpw');
        $current_pw = $this->user_m->get_pw();
        if(md5($old)==$current_pw->password){
            $this->user_m->change_pw(md5($newpw));
            echo "ok";
        }else{
            echo "otherpw";
        }
        
    }

    public function up_bank()
    {
        $iban = $this->input->post('iban');
        $bic = $this->input->post('bic');
        $name_holder = $this->input->post('name_holder');
        $address_bank = $this->input->post('address_bank');

        $this->user_m->update_bank($iban,$bic,$name_holder,$address_bank);
    }

}
?>