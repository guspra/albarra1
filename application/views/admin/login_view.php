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
	<!-- <div class="modal modal-login">
	  <div class="modal-header">
	    <h3>User Login</h3>
	  </div>
	  <div id='login_form'>
	  <form class="form-horizontal" action='<?php echo base_url();?>login/process' method='post' name='process'>
		  <div class="modal-body">
					  <label for="username">Username</label>
					  <input class="input-block-level" type="text" name='username' id='username'/>
					  <label for="password">Password</label>
					  <input class="input-block-level" type="text" name='password' id='password'/>
		  </div>
		  <div class="modal-footer">
		    	<a href="#" class="btn btn-primary">Login</a>
		  </div>
	  </form>
	  </div>
	 
	</div> -->

	<div class="modal modal-login">
		<div class="modal-header">
	    	<h3>User Login</h3>
	  	</div>
		<div id='login_form'>
	        <!-- <form action='<?php echo base_url();?>login/process' method='post' name='process' class="form-horizontal"> -->
	        <form action='<?php echo site_url('login/process') ?>' method='post' name='process' class="form-horizontal">
	        	<div class="modal-body">
		            <br />            
		            <label for='username'>Username</label>
		            <input type='text' name='username' id='username' size='25' /><br />
		        
		            <label for='password'>Password</label>
		            <input type='password' name='password' id='password' size='25' /><br />    
		        </div>                        
	        	<div class="modal-footer">
	            	<input type='Submit' value='Login' class="btn btn-primary" />  
	            </div>          
	        </form>
	    </div>
    </div>

	<script>window.jQuery || document.write('<script src="<?php echo base_url().'assets/js/admin/jquery-1.10.1.min.js'?>"><\/script>')</script>
	<script src="<?php echo base_url().'/assets/js/admin/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'/assets/js/admin/main.js'?>"></script>
</body>
</html>