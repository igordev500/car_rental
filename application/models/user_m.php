<?php

class User_m extends CI_Model{
    protected $table = 'user_tb';

    function __construct()
    {
        $this->load->database();
    }

    public function register($user)
    {
        $this->db->insert($this->table,$user);
    }

    public function read_check($email,$password)
	{
		$this->db->where('email',$email);
		$data=$this->db->get($this->table);
		$user=$data->row();
		if ($user) {
			if ($user->password==$password) {
                if($user->driv_doc_check==1){
                    if($user->identity_check==1){
                        return "already";
                    }else{
                        return "exist";
                    }
                }else{
                    return "exist";
                }
				return "exist";
			}
			else{
				return "pwd_err";
			}
		}
		else{
			return "new_email";
		}	
    }
    
    public function check_user($email,$password)
	{
		$this->db->where('email',$email);
		$data=$this->db->get($this->table);
		$user=$data->row();
		if ($user) {
			if ($user->password==$password) {
                $this->session->set_userdata('email',$email);
                $this->session->set_userdata('first',$user->first);
				return "success";
			}
			else{
				return "pwd_err";
			}
		}
		else{
			return "email_err";
		}	
    }
    
    public function check_email($email){
        $this->db->where('email',$email);
        $data=$this->db->get($this->table)->row();
        if($data){
            return "yes";
        }else{
            return "no";
        }
    }

    public function check_pin($email,$code){
        $this->db->where('email',$email);
        $this->db->update($this->table,array('code'=>$code));
        
    }

    public function reset_password($password,$code){
        $this->db->where('code',$code);
        $user=$this->db->get($this->table)->row();
        if($user){
            $this->db->where('code',$code);
            $this->db->update($this->table,array('password'=>$password));
            return $user;
        }else{
            return "err";
        }
        
    }

    public function fileinfo_up($email,$driv_doc,$identity)
    {
        $this->db->where('email',$email);
        $this->db->update($this->table,array('driv_doc'=>$driv_doc,'identity'=>$identity,'driv_doc_check'=>0,'identity_check'=>0));  
    }

    public function c_bank($iban,$bic,$Name_holder,$address)
    {
        $email = $this->session->userdata('email');

        $this->db->where('email',$email);
        $this->db->update($this->table,array('iban'=>$iban,'bic'=>$bic,
        'name_holder'=>$Name_holder,'address_bank'=>$address));
    }

    public function get_profile()
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        return $this->db->get($this->table)->row();
    }

    public function update_identity($first,$last,$phone_num,$address,$birth)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('first'=>$first,'last'=>$last,'phone_num'=>$phone_num,
          'address'=>$address,'birth'=>$birth));
    }

    public function up_description($description)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('presentation'=>$description));
    }

    public function up_picture($upload_name)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('user_picture'=>$upload_name));
    }

    public function up_doc($driving,$identity)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('driv_doc'=>$driving,'identity'=>$identity));
    }
    public function up_doc1($driving)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('driv_doc'=>$driving));
    }
    public function up_doc2($identity)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('identity'=>$identity));
    }

    public function get_pw()
    {
        $email = $this->session->userdata('email');
        $this->db->select('password');
        $this->db->where('email',$email);
        return $this->db->get($this->table)->row();
    }

    public function change_pw($newpw)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('password'=>$newpw));
    }

    public function update_bank($iban,$bic,$name_holder,$address_bank)
    {
        $email = $this->session->userdata('email');
        $this->db->where('email',$email);
        $this->db->update($this->table,array('iban'=>$iban,'bic'=>$bic,'name_holder'=>$name_holder
        ,'address_bank'=>$address_bank));
    }


}
?>