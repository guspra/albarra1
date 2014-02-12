<?php 
	class Home extends CI_Controller{
		public function index(){
			$data['categories'] = Category::find('all');//, array('limit' =>4));
			$data['featured_products'] = Product::find('all', array('conditions'=>'is_featured = 1', 'limit' => 1000, 'order'=>'created_at DESC'));
			$data['latest_products'] = Product::find('all', array("limit"=>4,'order'=>'created_at DESC'));
			$data['body']='home/index';
			$this->load->vars($data);
			$this->load->view('layouts/application');
		}

	}
 ?>