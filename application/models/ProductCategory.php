<?php 
	/**
	* many to many bridging class beteween product and category
	*/
	class ProductCategory extends ActiveRecord\Model
	{
		static $table_name = 'product_categories';

		static $belongs_to = array(
			array('product'),
			array('category')
		);
		
		
	}
 ?>