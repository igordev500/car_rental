<?php
/**
 * 
 */
class My_ads extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('ad_m');
        $this->load->model('photo_m');
        $this->load->model('berth_m');
        $this->load->model('checkbox_m');
    }
    
    public function index(){
        $var['title']="My ads | Bananacampers";
        $this->load->view('components/header',$var);
        $this->load->view('userpage/components/header');
        $this->load->view('components/footer_new');
        $this->load->view('userpage/myads');
    }

    public function read_myads()
    {
        $data['ads'] = $this->ad_m->all_ads();

        if($data['ads']){
            return $this->load->view('userpage/my_ads_component/myads_first_tb',$data);
        }else{
            echo "none";
        }
    }

    public function show_myads_details($ads_id,$v_type)
    {
        $var['title']="My ads | Bananacampers";
        $data['ads_id'] = $ads_id;
        $data['v_type'] = $v_type;

        $this->load->view('components/head_new',$var);
        // $this->load->view('userpage/components/header');
        $this->load->view('components/footer_new');
        $this->load->view('userpage/my_ads_component/myads_details',$data);
        
    }

    public function get_all_photo()
    {
        $ads_id = $this->input->get_post('ads_id');
        $data['photos'] = $this->photo_m->get_photo($ads_id);
        $this->load->view('userpage/my_ads_component/photos',$data);
    }

    public function add_newphoto()
    {
        $ph = $_FILES['new_photo'];
        $o_name= $ph['name'];
        $x = explode('.', $o_name);
        $exten = end($x);       
        $data['img_name'] = time().$i.'.'.$exten;
        
        @move_uploaded_file($_FILES['new_photo']['tmp_name'], './uploads/ads_photos/'.$data['img_name']);
        $data['ads_id']=$this->input->get_post('ads_id');
        $current_num = $this->photo_m->get_photo_num($data['ads_id']);
        $data['photo_num'] = $current_num + 1;
        $this->photo_m->create_photo($data);
    }

    public function get_type()
    {
        $data['ads_id']=$this->input->get_post('ads_id');
        $data = $this->ad_m->read($data['ads_id']);
        echo json_encode($data);
    }

    public function read_check()
    {
        $ads_id = $this->input->get_post('ads_id');
        $data = $this->checkbox_m->get_all($ads_id);
        echo json_encode($data);
    }

    public function get_berth()
    {
        $ads_id = $this->input->get_post('ads_id');
        $data['berths'] = $this->berth_m->get_all($ads_id);
        
        return $this->load->view('creating_ads/berth_tb',$data);
        
    }

    public function create_berth()
    {
        $data['type_berth'] = $this->input->post('type_berth');
        $data['width_berth'] = $this->input->post('width_berth');
        $data['length_berth'] = $this->input->post('length_berth');
        $data['ads_id'] = $this->input->post('ads_id');
        
        $old_num = $this->berth_m->get_old_id($data['ads_id']);

        $data['berth_num'] = $old_num + 1;
        
        $this->berth_m->add_berth($data);
    }

    public function update_type()
    {
        $ads_id = $this->input->post('ads_id');
        $chassis_brand = $this->input->post('id_chassis_brand');
        $chassis_model = $this->input->post('id_chassis_model');
        $model_brand = $this->input->post('id_model_brand');
        $conversion_model = $this->input->post('id_conversion_model');
        $numbers_seats = $this->input->post('id_numbers_seats');
        $number_seatbelts = $this->input->post('id_number_seatbelts');
        $number_berth = $this->input->post('id_number_berth');
        
        $this->ad_m->update_type($ads_id,$chassis_brand,$chassis_model,$model_brand,$conversion_model,$numbers_seats,$number_seatbelts,$number_berth);
    }

    public function update_charact()
    {
        $ads_id = $this->input->post('ads_id');
        $license_plate = $this->input->post('id_license_plate');
        $registered_country = $this->input->post('id_registered_country');
        $license_plate_year = $this->input->post('id_license_plate_year');
        $total_weight = $this->input->post('id_total_weight');
        $fuel = $this->input->post('id_fuel');
        $vehicle_length = $this->input->post('id_vehicle_length');
        $vehicle_consumption = $this->input->post('id_vehicle_consumption');
        $vehicle_width = $this->input->post('id_vehicle_width');
        $vehicle_height = $this->input->post('id_vehicle_height');
        $acquisition_value = $this->input->post('id_acquisition_value');
        $cell_phone = $this->input->post('id_cell_phone');
        
        $this->ad_m->update_charact($ads_id,$license_plate,$registered_country,$license_plate_year,
        $total_weight,$fuel,$vehicle_length,$vehicle_consumption,$vehicle_width,
        $vehicle_height,$acquisition_value,$cell_phone);
    }

    public function update_intro()
    {
        $ads_id = $this->input->post('ads_id');
        $intro = $this->input->post('intro');
        $this->ad_m->update_intro($ads_id,$intro);
    }

    public function update_parking_address()
    {
        $ads_id = $this->input->post('ads_id');
        $Street = $this->input->post('Street');
        $Number = $this->input->post('Number');
        $Flat_house = $this->input->post('Flat_house');
        $Zip_code = $this->input->post('Zip_code');
        $City = $this->input->post('City');
        $District = $this->input->post('District');
        $Country = $this->input->post('Country');
        $this->ad_m->update_parking_address($ads_id,$Street,$Number,$Flat_house,$Zip_code,$City,$District,$Country);
    }

    public function update_price()
    {
        $ads_id = $this->input->post('ads_id');
        $price = $this->input->post('price');
        $deposit = $this->input->post('deposit');
        $this->ad_m->update_price($ads_id,$price,$deposit); 
    }


}
?>