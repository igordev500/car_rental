<?php
/**
 * 
 */
class First extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->library('email');
	}

	public function index()
	{
		$var['title']="Motorhome rental";
		$this->load->view('components/header',$var);
		$this->load->view('first');
		$this->load->view('components/footer');
	}

	public function sign_up()
	{
		$var['title']="Sign up";
		$this->load->view('components/header',$var);
		$this->load->view('sign/sign_up');
		$this->load->view('components/footer');
		
	}

	public function sign_in(){
		$var['title']="Sign in";
		$this->load->view('components/header',$var);
		$this->load->view('sign/sign_in');
		$this->load->view('components/footer');
	}

	public function register(){
		$user['first']=$this->input->post('first');
		$user['last']=$this->input->post('last');
		$yy=$this->input->post('yy');
		$mm=$this->input->post('mm');
		$dd=$this->input->post('dd');
		$user['birth']=$yy.'-'.$mm.'-'.$dd;
		$user['email']=$this->input->post('email');
		$user['password']=md5($this->input->post('password'));
		$user['phone_num']=$this->input->post('phone');
		$user['address']=$this->input->post('address');

		$result=$this->user_m->read_check($user['email'],$user['password']);

		if ($result=="new_email") {
			$this->user_m->register($user);
				// $this->email->from('Bananacampers.com', 'Bananacampers-service');
				// $this->email->to($user['email']);
				
				// $this->email->subject('Welcome to register in Bananacampers.com');
				// $this->email->message(
				// 	'<table border="0" cellpadding="0" cellspacing="0" width="100%">
				// 		<tr>
				// 		<td align="center" bgcolor="#e9ecef">      
				// 			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				// 			<tr>
				// 				<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
				// 				<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Welcome to in Bananacampers.com</h1>
				// 				</td>
				// 			</tr>
				// 			</table>     
				// 		</td>
				// 		</tr>   
				// 		<tr>
				// 		<td align="center" bgcolor="#e9ecef">       
				// 			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				// 			<tr>
				// 				<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
				// 				<p style="margin: 0;">Rent and RV, camper or conversion van and travel all across Europe!</p>
				// 				</td>
				// 			</tr>
				// 			<tr>
				// 				<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
				// 					<p style="margin: 0;">Do you own an RV or camper van Rent out your RV and start earning!</p>
				// 				</td>
								
				// 			</tr> 
				// 			<tr>
				// 				<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
				// 				<p style="margin: 0;">From Bananacampers.com</p>
				// 				</td>
				// 			</tr>
				// 			</table>       
				// 		</td>
				// 		</tr>
				// 	</table>');
				// $this->email->send();
			echo "pass";
		}
		else{
			echo $result;			
		}
	}

	public function login(){
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		echo $this->user_m->check_user($email,$password);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}

	function forgot_pwd(){
		$var['title']="Forgotten your password";
		$this->load->view('components/header',$var);
		$this->load->view('sign/forgot_pwd');
		$this->load->view('components/footer');
	}

	function send_pwd(){
		$email=$this->input->post('email');
		$result_check_email=$this->user_m->check_email($email);

		if($result_check_email=="yes"){
			$code=rand();
			$this->user_m->check_pin($email,$code);
			$this->email->from('Bananacampers.com', 'Bananacampers-service');
			$this->email->to($email);
			
			$this->email->subject('Bananacampers-Forgotten-password');
			$this->email->message(
				'<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
					<td align="center" bgcolor="#e9ecef">      
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
							<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Reset Your Password</h1>
							</td>
						</tr>
						</table>     
					</td>
					</tr>   
					<tr>
					<td align="center" bgcolor="#e9ecef">       
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
							<p style="margin: 0;">Please click the button below to reset your password.</p>
							</td>
						</tr>
						<tr>
							<td align="left" bgcolor="#ffffff">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
								<td align="center" bgcolor="#ffffff" style="padding: 12px;">
									<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
										<a href="http://localhost/index.php/First/reset_pwd?code='.$code.'" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">Reset Password.</a>
										</td>
									</tr>
									</table>
								</td>
								</tr>
							</table>
							</td>
						</tr> 
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
							<p style="margin: 0;">Cheers.</p>
							</td>
						</tr>
						</table>       
					</td>
					</tr>
				</table>');
			if($this->email->send()){
				echo "send_ok";
			}else{
				echo "send_err";
			}
		}else{
			echo $result_check_email;
		}
	}

	function reset_pwd(){
		$var['title']="Reset your password";
		$data['code']=$this->input->get('code');

		$this->load->view('components/header',$var);
		$this->load->view('sign/reset_pwd',$data);
		$this->load->view('components/footer');
	}

	function reset(){
		$password = md5($this->input->post('new_pwd'));
		$code = $this->input->post('code');

		$val=$this->user_m->reset_password($password,$code);
		if($val!=='err'){
			$this->session->set_userdata('email',$val->email);
			$this->session->set_userdata('first',$val->first);
			echo 1;
		}else{
			echo 0;
		}
	}

	public function driving_license_up()
	{
		$driving_up = $_FILES['driving_up'];
		$oldname1= $driving_up['name'];
		$x = explode('.', $oldname1);
		$extension1 = end($x);
		$data['driv_doc'] = time().'.'.$extension1;

		@move_uploaded_file($_FILES['driving_up']['tmp_name'], './uploads/driving_license/'.$data['driv_doc']);

		$idt_up = $_FILES['idt_up'];
		$oldname2= $idt_up['name'];
		$y = explode('.', $oldname2);
		$extension2 = end($y);
		$data['identity'] = time().'.'.$extension1;

		@move_uploaded_file($_FILES['idt_up']['tmp_name'], './uploads/identity_cards/'.$data['identity']);

		$email = $this->input->get_post('email');

		$val=$this->user_m->fileinfo_up($email,$data['driv_doc'],$data['identity']);

		
	}
}
?>