<div class="content-edit">
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="#">Dashboard</a>
				<span class="divider">/</span>
			</li>
			<li>
				<a href="<?php echo site_url('admin/products') ?>">Products</a>
				<span class="divider">/</span>
			</li>
			<li class="active">
				
				<!-- <?php echo ucfirst($this->uri->segment(3)) ?>  -->
				
				<?php echo $action ?> Products</li>
		</ul>
		<h2>
			<?php echo $form_title ?></h2>
		<hr>
		<!-- <div class="alert alert-error">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, recusandae, cumque suscipit id exercitationem accusantium laboriosam debitis quae unde deserunt quasi at maiores! Doloribus, optio dolor laudantium corporis quisquam possimus!
		</div> -->

		<form method="POST" action="<?php echo $form_action; ?>" enctype="multipart/form-data">
			<div class="row">
				<div class="span3">Name</div>
				<div class="span9">
					<input name="product[name]" value="<?php echo $product->
					name?>" class="input-block-level" type="text">
					<div class="text-error">
						<?php if ($product->errors) echo $product->errors->on('name'); ?></div>
				</div>
			</div>
			<div class="row">
				<div class="span3">Description</div>
				<div class="span9">
					<textarea name="product[description]" value="" class="input-block-level" type="text" rows="5"><?php echo $product->description?></textarea>
				</div>
				<div class="text-error">
					<?php if ($product->errors) echo $product->errors->on('description'); ?></div>
			</div>
			<div class="row">
				<div class="span3">Price</div>
				<div class="span9">
					<input name="product[price]" value="<?php echo $product->
					price?>" class="input-block-level" type="text">
					<div class="text-error">
						<?php if ($product->errors) echo $product->errors->on('price'); ?></div>
				</div>

			</div>
			<div class="row">
				<div class="span3">Product Image</div>
				<div class="span9">
					<?php if ($product->image_url()): ?>
					<img src="<?php echo $product->image_url() ?>" width="200" alt="" class="img-polaroid">
				<?php endif; ?>
					<input name="product_image" type="file" class="input-block-level" type="text">
				</div>
			</div>

			<div class="row">
				<div class="span3">Recomended</div>
				<div class="span9">
					<?php 
						$options= array('0' => 'No', '1'=>'Yes');
						echo form_dropdown('product[is_featured]', $options, $product->is_featured);
					 ?>
				</div>
			</div>

			<div class="row">
				<div class="span3">Categories</div>
				<div class="span9">
					<select name="category" >
						<?php foreach ($categories as $category): ?>
							<option value="<?php echo $category->name ?>"><?php echo $category->name ?></option>
						<?php endforeach ?>
					</select>
					<!-- <input type="text" name="xxx"> -->
				</div>
			</div>
			<div class="row pull-right">
				<!-- <button class="btn">Cancel</button> -->
				<button class="btn btn-success">Submit</button>
			</div>
		</form>

	</div>
</div>