<?php 
	class Product_front extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->data['categories'] = Category::find('all'); //, array('limit' =>4));
			//$this->data['categories'] = Category::limit(5);
		}
		public function category($id){
			 $this->data['category'] = Category::find($id);
			 $this->data['products'] = $this->data['category']->products;
			$this->data['body'] = 'product/category';
			$this->load->view('layouts/application', $this->data);
		}

		public function detail($id){
			$this->data['product'] = Product::find($id);
			$this->data['body'] = 'product/detail';
			$this->load->view('layouts/application', $this->data);
		}


	}
 ?>