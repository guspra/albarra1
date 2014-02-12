<div class="content-edit">
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="#">Dashboard</a>
				<span class="divider">/</span>
			</li>
			<li>
				<a href="<?php echo site_url('admin/users') ?>">Users</a>
				<span class="divider">/</span>
			</li>
			<li class="active">
				<?php echo ucfirst($this->uri->segment(3)) ?> <?php echo $action ?>  Users
			</li>
		</ul>
		<h2><?php echo $form_title ?></h2>
		<hr>

		<form method="POST" action="<?php echo $form_action; ?>">
			<div class="row">
				<div class="span3">Name</div>
				<div class="span9">
					<input name="user[name]" value="<?php echo $user->name?>" class="input-block-level" type="text"></div>
			</div>
			<div class="row">
				<div class="span3">Password</div>
				<div class="span9">
					<input name="user[pass]" value="<?php echo $user->pass?>" class="input-block-level" type="text"></div>
			</div>
			
			
			
			<div class="row pull-right">
				<button class="btn">Cancel</button>
				<button class="btn btn-success">Update</button>
			</div>
		</form>

	</div>
</div>