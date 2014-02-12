<?php
	class Category extends ActiveRecord\Model{

		static $has_many = array(
			array('products', 'through' => 'product_categories'),
			array('product_categories')
			
		);

		
		// static $has_many = array(
		// 	array('products')
			
		// );



		static $belongs_to = array(
			array('product')
			);





		// static $has_many = array(
		// 		array('children', 'class_name' => 'Category', 'foreign_key' => 'parent_id')
		// 		array('products')
		// 	);

		// static $belongs_to = array(
		// 	array('parent' , 'class_name')
		// 	)
	}
?>