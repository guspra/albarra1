<div class="content-edit">
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="#">Dashboard</a>
				<span class="divider">/</span>
			</li>
			<li>
				<a href="<?php echo site_url('admin/categories') ?>">Categories</a>
				<span class="divider">/</span>
			</li>
			<li class="active">
				<!-- 
				<?php echo ucfirst($this->uri->segment(3)) ?> 
 -->
				<?php echo $action ?>  Categories
			</li>
		</ul>
		<h2><?php echo $form_title ?></h2>
		<hr>
		<!-- <div class="alert alert-error">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, recusandae, cumque suscipit id exercitationem accusantium laboriosam debitis quae unde deserunt quasi at maiores! Doloribus, optio dolor laudantium corporis quisquam possimus!
		</div> -->

		<form method="POST" action="<?php echo $form_action; ?>">
			<div class="row">
				<div class="span3">Name</div>
				<div class="span9">
					<input name="category[name]" value="<?php echo $category->name?>" class="input-block-level" type="text"></div>
			</div>
			<!-- <div class="row">
				<div class="span3">Email</div>
				<div class="span9">
					<input name="user[email]" value="<?php echo $user->email?>" class="input-block-level" type="text"></div>
			</div> -->
			
			
			
			<div class="row pull-right">
				<!-- <button class="btn">Cancel</button> -->
				<button class="btn btn-success">Tambah</button>
			</div>
		</form>

	</div>
</div>