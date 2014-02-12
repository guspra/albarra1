<?php

class Products extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->check_isvalidated();
	}

	private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

    public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

	function index($page = 1){
		$this->data['products'] = Product::page($page);
		$this->data['body'] = 'admin/products/index';
		$this->load->view('admin/layouts/admin' , $this->data);
	}

	function add(){
		$this->data['categories'] = Category::all();
		$this->data['product'] = new Product();
		$this->data['form_title'] = 'Add product';
		$this->data['form_action'] = site_url('admin/products/create');
		$this->data['action'] = 'Add';
		$this->data['body'] = 'admin/products/add';
		$this->load->view('admin/layouts/admin' , $this->data);
	}

	function edit($id){
		$this->data['categories'] = Category::all();
		$this->data['product'] = Product::find($id);
		$this->data['form_title'] = 'Edit '.$this->data['product']->name;
		$this->data['form_action'] = site_url('admin/products/update/'.$this->data['product']->id);
		$this->data['action'] = 'Ediitt';
		$this->data['body'] = 'admin/products/edit';
		$this->load->view('admin/layouts/admin' , $this->data);
	}

	function create(){
		$this->data['product'] = new Product($this->input->post('product'));
		
		$last_product = Product::last();
		$new_product_category = new ProductCategory();
		 $new_product_category->product_id = $last_product->id + 1;
		 $zz = Category::all(array('conditions' => array('name = ?', $this->input->post('category'))));
		 $new_product_category->category_id = $zz[0]->id;
		 $new_product_category->save();

		if($this->data['product']->save()){
			if ($this->data['product']->upload_image())
				$this->data['product']->save();

			redirect(site_url('admin/products'));
		} else{
			$this->data['form_title'] = 'Add product';
			$this->data['form_action'] = site_url('admin/products/create');
			$this->data['action'] = 'Addd';
			$this->data['body'] = 'admin/products/add';
			$this->load->view('admin/layouts/admin' , $this->data);
		}
		
	}

	function update($id){
		$this->data['product'] = Product::find($id);
		$this->data['product']->update_attributes($this->input->post('product'));

		//menghapus kategori lama
		$old_category = ProductCategory::all(array('conditions' => array('product_id = ?', $this->data['product']->id)));
		$old_category[0]->delete();

		//menambah kategori baru
		$last_product = Product::last();
		$new_product_category = new ProductCategory();
		 $new_product_category->product_id = $this->data['product']->id;
		 $zz = Category::all(array('conditions' => array('name = ?', $this->input->post('category'))));
		 $new_product_category->category_id = $zz[0]->id;
		 $new_product_category->save();

		if($this->data['product']->save()){
			if ($this->data['product']->upload_image())
				$this->data['product']->save();
			redirect(site_url('admin/products'));
		} else{
			$this->data['form_title'] = 'Edit '.$this->data['product']->name;
			$this->data['form_action'] = site_url('admin/products/update/'.$this->data['product']->id);
			$this->data['action'] = 'Ediitt';
			$this->data['body'] = 'admin/products/edit';
			$this->load->view('admin/layouts/admin' , $this->data);
		}
		
	}

	function destroy($id){
		$product = Product::find($id);
		$product->delete();
		redirect(site_url('admin/products'));
	}


}

?>