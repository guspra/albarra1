<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="<?php echo base_url().'/assets/css/normalize.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'/assets/css/bootstrap.css' ?>" >
	<link rel="stylesheet" href="<?php echo base_url().'/assets/css/style_backend.css' ?>">

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/HTML5Shiv.js"></script>
	<![endif]-->
</head>
<body>
	 <header class="main-header">
	 	<div class="container">
	 		<div class="navbar">
			  <div class="navbar-inner">
			    <a class="brand" href="#">Albarra Furniture CMS</a>
			    <ul class="nav pull-right">
			    	<li><a href="<?php echo site_url('admin/users') ?>">Ganti Password</a></li>
			      <li><a href="<?php echo site_url('admin/products') ?>">Product List</a></li>
			      <li><a href="<?php echo site_url('admin/categories') ?>">Categories</a></li>
			      <li><a href="<?php echo site_url('admin/products/do_logout') ?>"><i class="icon-off"></i>Log Out</a></li>
			      <!--
			      <li><a href="#">Register</a></li>
			      <li>
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hello, Admin
							<b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
					  	<li><a href="#"><i class="icon-user"></i>Profile</a></li>
					  	<li><a href="#"><i class="icon-cog"></i>Change Password</a></li>
					  	<li class="divider"></li>
					  	<li><a href="#"><i class="icon-off"></i>Log Out</a></li>
					  </ul>
			      </li> -->
			    </ul>
			  </div>
			</div>
	 	</div>
	 </header>

	 <!-- CONTENT -->
	<?php $this->load->view($body) ?>

	

	<footer>
		<hr>
		<p>&copy; 2013 - Albarra Furniture</p>
	</footer>

	<script>window.jQuery || document.write('<script src="<?php echo base_url().'assets/js/admin/jquery-1.10.1.min.js'?>"><\/script>')</script>
	<script src="<?php echo base_url().'/assets/js/admin/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'/assets/js/admin/main.js'?>"></script>
</body>
</html>