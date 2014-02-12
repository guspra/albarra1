<?php 
/**
* 
*/
class Registrations extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
// $this->input->post('user')
	function sign_up(){
		$new_user = new User();
		$new_user->set_password(
			$this->input->post('password'),
			$this->input->post('password_confirmation')
		);
		$new_user->email = $this->input->post('email');
		$new_user->name= $this->input->post('name');
		//$new_user->validatex();
		
		if($new_user->save_success){
			$new_user->save();
			$this->send_email($this->input->post('email'));
			$this->session->set_flashdata('msg_type', 'successsss');
			$this->session->set_flashdata('msg_content', 'Silahkan cek email, Anda telah berhasil melakukan registrasi');
		} else{
			$this->session->set_flashdata('msg_type', 'errorrrr');
			$this->session->set_flashdata('msg_content', 'Maaf, terdapat error di form, silahkan melakukan proses registrasi ulang');
		}

		//$new_user->save();
		
		redirect(site_url('home'));
	}

	function send_email($email){
		$this->load->library('email');

		$this->email->from('guspraa@gmail.com', 'Suit Shop');
		$this->email->to($email); 
		// $this->email->cc('another@another-example.com'); 
		// $this->email->bcc('them@their-example.com'); 

		$this->email->subject('Registrasi berhasil');
		$this->email->message('Selamat anda telah berhasil melakukan registrasi');	

		$this->email->send();

		 echo $this->email->print_debugger();
	}
}
 ?>