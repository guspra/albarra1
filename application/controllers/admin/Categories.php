<?php

class Categories extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->check_isvalidated();
	}

	private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
	function index(){
		$this->data['categories'] = Category::find('all');
		$this->data['body'] = 'admin/categories/index';
		$this->load->view('admin/layouts/admin' , $this->data);
	}

	function add(){
		$this->data['category'] = new Category();
		$this->data['form_title'] = 'Add Category';
		$this->data['form_action'] = site_url('admin/categories/create');
		$this->data['action'] = 'Add';
		$this->data['body'] = 'admin/categories/add';
		$this->load->view('admin/layouts/admin' , $this->data);
	}

	function create(){
		$category = new Category($this->input->post('category'));
		$category->save();
		redirect(site_url('admin/categories'));
	}

	function destroy($id){
		$category = Category::find($id);
		$category->delete();
		redirect(site_url('admin/categories'));
	}
}