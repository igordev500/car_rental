<?php

class Create_ads extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('ad_m');
        $this->load->model('photo_m');
        $this->load->model('berth_m');
        $this->load->model('checkbox_m');
        $this->load->model('user_m');
    }
    
    public function index(){
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";
            $this->load->view('components/head_new',$var);

            $step_num = $this->ad_m->read_last_step($this->session->userdata('email'));
            if($step_num==1){
                $this->load->view('creating_ads/step2');
            }else if($step_num==2){
                $this->load->view('creating_ads/step3');
            }else if($step_num==3){
                $this->load->view('creating_ads/step4');
            }else if($step_num==4){
                $this->load->view('creating_ads/step5');
            }else if($step_num==5){
                $this->load->view('creating_ads/step6');
            }else if($step_num==6){
                $this->load->view('creating_ads/step7');
            }else if($step_num==7){
                $this->load->view('creating_ads/step8');
            }else{
                $this->load->view('creating_ads/step_start');
            }    

            $this->load->view('components/footer');
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        }
        
    }

    public function step1()
    {
        if($this->session->has_userdata('email')){
            
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('creating_ads/step_start');
            $this->load->view('components/footer');
            
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        } 
    }
    public function step2()
    {
        if($this->session->has_userdata('email')){
            
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step2');
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        } 
    }
    public function step3()
    {
        
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";
            
            $this->load->view('components/header',$var);            
            $this->load->view('creating_ads/step3');
            $this->load->view('components/footer');
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        } 
    }
    public function step4()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step4');
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        } 
    }
    public function step5()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step5');
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        } 
    }
    public function step6()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step6');
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        } 
    }
    public function step7()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step7');
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        } 
    }
    public function step8()
    {
        if($this->session->has_userdata('email')){
            $var['title']="creating_ads | Bananacampers";

            $this->load->view('components/head_new',$var);
            $this->load->view('components/footer');
            $this->load->view('creating_ads/step8');
        }else{
            $var['title']="Sign in";
            $this->load->view('components/header',$var);
            $this->load->view('sign/sign_in');
            $this->load->view('components/footer');
        } 
    }

    public function create_step1()
    {
        $data['vehicle_type'] = $this->input->post('vehicle_type');
        $data['chassis_brand'] = $this->input->post('chassis_brand');
        $data['chassis_model'] = $this->input->post('chassis_model');
        $data['model_brand'] = $this->input->post('model_brand');
        $data['conversion_model'] = $this->input->post('conversion_model');
        $data['seats'] = $this->input->post('seats');
        $data['seatbelts'] = $this->input->post('seatbelts');
        $data['berth'] = $this->input->post('berth');
        $data['step'] = 1;

        $data['email'] = $this->session->userdata('email');
        
        $this->ad_m->c_step1($data);
        // echo $id;
    }

    public function update_step1()
    {
        $data['vehicle_type'] = $this->input->post('vehicle_type');
        $data['chassis_brand'] = $this->input->post('chassis_brand');
        $data['chassis_model'] = $this->input->post('chassis_model');
        $data['model_brand'] = $this->input->post('model_brand');
        $data['conversion_model'] = $this->input->post('conversion_model');
        $data['seats'] = $this->input->post('seats');
        $data['seatbelts'] = $this->input->post('seatbelts');
        $data['berth'] = $this->input->post('berth');
        $data['step'] = 1;

        $data['email'] = $this->session->userdata('email');
        
        $id = $this->ad_m->c_step1($data);
        echo $id;
    }

    public function create_step2()
    {
        $license_p = $this->input->post('license_p');
        $reg_country = $this->input->post('reg_country');
        $license_p_year = $this->input->post('license_p_year');
        $total_weight = $this->input->post('total_weight');
        $fuel = $this->input->post('fuel');
        $consumption = $this->input->post('consumption');
        $length = $this->input->post('length');
        $width = $this->input->post('width');
        $height = $this->input->post('height');
        $acquisition_v = $this->input->post('acquisition_v');
        $cell_phone = $this->input->post('cell_phone');

        $ad_id = $this->ad_m->lasted_id();
        $this->ad_m->c_step2($ad_id,$license_p,$reg_country,$license_p_year,$total_weight,$fuel,$consumption,$length,$width,$height,$acquisition_v,$cell_phone);
    }

    public function create_step3()
    {
        $cnt = $this->input->get_post('cnt');
        $data['ads_id']=$this->ad_m->lasted_id();

        for ($i=1; $i <= $cnt ; $i++) { 
            $ph = $_FILES['p_'.$i];
            $o_name= $ph['name'];
            $x = explode('.', $o_name);
            $exten = end($x);       
            $data['img_name'] = time().$i.'.'.$exten;
            $data['photo_num'] = $i;

            @move_uploaded_file($_FILES['p_'.$i]['tmp_name'], './uploads/ads_photos/'.$data['img_name']);
            $this->photo_m->create_photo($data);

        }
        
        $step = 3;
        $this->ad_m->update_set_num($data['ads_id'],$step);

    }

    public function read_step4()
    {
        $ads_id = $this->ad_m->lasted_id();
        $data['berths'] = $this->berth_m->get_all($ads_id);
        if($data['berths']){
            return $this->load->view('creating_ads/berth_tb',$data);
        }else{
            return $data['berths'];
        }     
        
    }

    public function create_step4()
    {
        $data['type_berth'] = $this->input->post('type_berth');
        $data['width_berth'] = $this->input->post('width_berth');
        $data['length_berth'] = $this->input->post('length_berth');
        
        $ads_id = $this->ad_m->lasted_id();
        $old_num = $this->berth_m->get_old_id($ads_id);

        $data['berth_num'] = $old_num + 1;
        
        $data['ads_id'] = $ads_id;
        $this->berth_m->add_berth($data);
    }

    public function del_berth()
    {
        $berth_id = $this->input->get_post('del_id');
        $this->berth_m->del_berth($berth_id);
    }

    public function update_step()
    {
        $ads_id=$this->ad_m->lasted_id();
        $step=$this->input->get_post('step');

        $this->ad_m->update_set_num($ads_id,$step);
    }

    public function up_step5()
    {
        $col = $this->input->get_post('id');
        $state = $this->input->get_post('state');
        

        $ads_id=$this->ad_m->lasted_id();


        $exist = $this->checkbox_m->read_ads($ads_id);
        var_dump($exist);
        if($exist==0){
            $this->checkbox_m->create_check($ads_id,$col,$state);
        }else{
            $this->checkbox_m->up_check($ads_id,$col,$state);
        }
       
    }

    public function add_dining_seats_step5()
    {
        $val = $this->input->get_post('value');
        $ads_id = $this->ad_m->lasted_id();
        $this->checkbox_m->add_dining_seats_step5($ads_id,$val);
         
    }

    public function read_step5()
    {
        $ads_id = $this->ad_m->lasted_id();
        $data = $this->checkbox_m->get_all($ads_id);
        echo json_encode($data);
    }

    public function create_intro()
    {
        $intro = $this->input->get_post('intro');
        
        $ads_id = $this->ad_m->lasted_id();
        $this->ad_m->create_intro($ads_id,$intro);
        $step = 6;
        $this->ad_m->update_set_num($ads_id,$step);
    }
    
    function read_intro()
    {
        $ads_id = $this->ad_m->lasted_id();
        echo $this->ad_m->read_intro($ads_id);
    }

    public function create_step7()
    {
        $street = $this->input->post('Street');
        $Number = $this->input->post('Number');
        $Flat_house = $this->input->post('Flat_house');
        $Zip_code = $this->input->post('Zip_code');
        $City = $this->input->post('City');
        $District = $this->input->post('District');
        $Country = $this->input->post('Country');

        $ads_id = $this->ad_m->lasted_id();
        $this->ad_m->update_park_info($ads_id,$street,$Number,$Flat_house,$Zip_code,$City,$District,$Country);

        $step = 7;
        $this->ad_m->update_set_num($ads_id,$step);
    }

    public function read()
    {
        $ads_id = $this->ad_m->lasted_id();
        $data = $this->ad_m->read($ads_id);
        echo json_encode($data);
    }

    public function create_step8()
    {
        $price = $this->input->post('price');
        $deposit = $this->input->post('deposit');

        $iban = $this->input->post('iban');
        $bic = $this->input->post('bic');
        $Name_holder = $this->input->post('Name_holder');
        $address = $this->input->post('address');

        $ads_id = $this->ad_m->lasted_id();
        $this->ad_m->complete_ads($ads_id,$price,$deposit);

        $this->user_m->c_bank($iban,$bic,$Name_holder,$address);

        $step = 8;
        $this->ad_m->update_set_num($ads_id,$step);
    }

}
?>