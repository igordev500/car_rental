<?php

    class photo_m extends CI_Model{

        protected $table = 'rv_photo_tb';
        
        function __construct(){
            $this->load->database();
        }
     
        public function create_photo($data)
        {
            $this->db->insert($this->table,$data);        
        }

        public function all_photo()
        {
            $email=$this->session->userdata('email');
            return $this->db->where('email',$email)->get($this->table)->row();
        }

        public function get_photo($ads_id)
        {
            $this->db->where('ads_id',$ads_id);
            return $this->db->get($this->table)->result();
        }

        public function get_photo_num($ads_id)
        {
            $this->db->where('ads_id',$ads_id);
            return $this->db->get($this->table)->num_rows();
        }
    
    
    
    }

?>