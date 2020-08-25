<?php

class user_m extends CI_Model{
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


}
?>