<?php
	class Product extends ActiveRecord\Model {

		static $has_many = array(
			array('categories', 'through' => 'product_categories'),
			array('product_categories')
		);

		//belongs to associations
		static $belongs_to = array(
			array('category')
			);

		//validations
		static $validates_presence_of  = array(
			array('name'),
			array('price'),
			//array('description')
		);

		static $validates_numericality_of = array(
			array('price', 'greater_than_or_equal_to' => 0)
		);

		// static $after_save = array(
		// 	'upload_image',
		// 	'upload_catalogue'
		// );

		static $before_destroy = array(
			'delete_uploaded_image'
		);

		public function image_url(){
			if($this->image)
					return base_url('uploads/product/'.$this->id. '/' . $this->image);
				else
					return FALSE;
		}

		public function upload_image(){
			$CI =& get_instance();
			$CI->load->library('upload');
			if (isset($_FILES['product_image']['size']) && $_FILES['product_image']['size'] > 0){
				//CREATE TARGET DIRECTORY
				$target_dir = getcwd() . '/uploads/product/' . $this->id;
				if(!file_exists($target_dir))
					mkdir($target_dir);
				echo "cekkk";

				$config['upload_path'] = $target_dir;
				$config['allowed_types'] = "gif|png|jpg|bmp";
				// $config['image_size'] = '1000000';
				// $config['max_width'] = '2048';
				// $config['max_height'] = '1536';
				$CI->upload->initialize($config);

				$this->delete_uploaded_image();

				if($CI->upload->do_upload('product_image')){
					$upload_data = $CI->upload->data();
					$this->image = $upload_data['file_name'];
					return TRUE;
				} else{
					return FALSE;
				}
			}
		}

		public function delete_uploaded_image(){
			$full_path = getcwd() .'/uploads/product/'.$this->id . '/' .$this->image;
			if(isset($this->image) && file_exists($full_path))
				unlink($full_path);
		}


		public function upload_catalogue(){

		}

		static $per_page = 5;

		static function page($page_number){
			return Product::find('all', array('offset' => ($page_number-1) * self::$per_page, 'limit' => self::$per_page));
		}
	}
?>