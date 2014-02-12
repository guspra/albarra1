<?php
class Hello extends ci_controller{
	public function __construct() {
			parent::__construct();
	}	
	public function index(){
		$data['body']='hello/index';
		$data['title'] = '<h1>asldjhfalsdflsajdfklsadlkfjalsdjflwafwhrbeifhwihfjshadfkshdf</h1>';
		$this->load->vars($data);
		$this->load->view('layouts/application');
	}

	public function add(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password_crypt', 'password_crypt', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required[valid_email]');
		if ($this->form_validation->run()){
			$this->process_form();
		}
		$this->load->view('hello/form');
	}

	private function process_form($editmode=FALSE){
		if($editmode==TRUE){
			$data=User::find($this->input->post('id'));
			$data->name=$this->input->post('name');
			$data->password_crypt=$this->input->post('password_crypt');
			$data->email=$this->input->post('email');
			$data->save();
			redirect('hello/all_data');
		} else{
			$user = new User();
			$user->name=$this->input->post('name');
			$user->password_crypt=$this->input->post('password_crypt');
			$user->email=$this->input->post('email');
			$user->save();
			redirect('hello/success');
		}
	}

	public function success(){
		$this->load->view('hello/success');
	}

	public function all_data(){
		$data['all'] = User::find('all');
		$this->load->view('hello/all_data' , $data);
	}

	public function view_single_data($id){
		$data['coba'] = User::find($id);
		$this->load->vars($data);
		$this->load->view('hello/view');
	}

	public function delete_single_data($id) {
		$user = User::find($id);
		$user->delete();
		redirect('hello/all_data');
	}

	public function edit_single_data($id){
		$data['editmode']=TRUE;

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password_crypt', 'password_crypt', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required[valid_email]');
		if($this->form_validation->run()) {
			$this->process_form(TRUE);
		}

		$data['coba'] = User::find($id);
		$this->load->vars($data);
		$this->load->view('hello/edit_form');
	}

	public function editz($id){
		$data['coba'] = User::find($id);
		$this->load->vars($data);
		$this->load->view('hello/edit_form');
	}
	public function edit($id){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password_crypt', 'password_crypt', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required[valid_email]');
		if($this->form_validation->run()) {
			$this->edit_data($id);
		}

		// $data['coba'] = User::find($id);
		// $this->load->vars($data);
		// $this->load->view('hello/edit_form');
	}

	public function edit_data($id){
		$data=User::find($id);
		$data->name=$this->input->post('name');
		$data->password_crypt=$this->input->post('password_crypt');
		$data->email=$this->input->post('email');
		$data->save();
		redirect('hello/all_data');
	}

	public function world(){
		$data['body']='hello/index';
		$data['title'] = '<h1>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>';
		$this->load->vars($data);
		$this->load->view('layouts/sidebar');
	}

	public function aboutt(){
		$data['body']='hello/about';
		$this->load->vars($data);
		$this->load->view('layouts/application');
	}

	public function cart(){
		$data['body']='hello/cart';
		$this->load->vars($data);
		$this->load->view('layouts/application');
	}

	public function contact(){
		$data['body']='hello/contact';
		$this->load->vars($data);
		$this->load->view('layouts/application');
	}

	public function details(){
		$data['body']='hello/details';
		$this->load->vars($data);
		$this->load->view('layouts/application');
	}


	public function set_user(){
		$user = new  User();
		$user->name = "guspra";
		$user->email = "guspraa@gmail.com";
		$user->password_crypt = "621516124";
		$user->save();
	}

	public function get_user(){
		echo User::find('first')->name;
	}
}

?>