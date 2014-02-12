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
	<link rel="stylesheet" href="<?php echo base_url().'/assets/css/style.css' ?>">

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/HTML5Shiv.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Modal -->
	<div id="Login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">Login</h3>
			  </div>
			  <div class="modal-body">
			    <form class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Email</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Email">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">Password</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <label class="checkbox">
		        <input type="checkbox"> Remember me
		      </label>
		      <button type="submit" class="btn">Sign in</button>
		    </div>
		  </div>
		</form>
			  </div>
	</div>

	<div id="SignUp" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">Login</h3>
			  </div>
			  <div class="modal-body">
			    <form class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Email</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Email">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">Password</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">Confirm Password</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="Confirm Password">
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <button type="submit" class="btn">Sign Up</button>
		    </div>
		  </div>
		</form>
			  </div>
	</div>

	<nav class="user-nav">
		<div class="container">
			<ul>
				<li>Welcome Guest!</li>
				<li>
					<a href="#Login" data-toggle="modal">Log In</a>/
					<a href="#SignUp" data-toggle="modal">Sign Up</a>
				</li>
				<li>
					<div class="icon-shopping-cart icon-white"></div>
					<a href="#">Cart 0</a>
				</li>
			</ul>

		</div>
	</nav>

	<header>
		<div class="container">
			<div class="row">
					<div class="span4">
						<img src="<?php echo base_url().'/assets/img/logo.png' ?>"  alt="">
					</div>
					<div class="span8">
						<nav class="main-nav">
							<ul>
								<li><a href="">Sepatu</a></li>
								<li><a href="">Aksesoris</a></li>
							</ul>
						</nav>
					</div>
			</div>
			
		</div>
	</header>

	<?php $this->load->view($body); ?>
	<?php echo $title?>

<footer>
		<div class="container">
			<div class="row">
				<div class="span12">
					<a href="" class="social">
						<img src="<?php echo base_url().'/assets/img/ico-facebook.png'?>" alt="">
						<span>FACEBOOK</span>
					</a>
					<a href="" class="social">
						<img src="<?php echo base_url().'/assets/img/ico-twitter.png'?>" alt="">
						<span>@SUITSHOP</span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<a href="">ABOUT</a> 
					<span>&middot</span>
					<a href="">PRIVACY POLICY</a> 
					<span>&middot</span>
					<a href="">CONTACT</a>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					&copy 2013 SUITSHOP
				</div>
			</div>
		</div>
	</footer>
	<script>window.jQuery || document.write('<script src="<?php echo base_url().'assets/js/jquery-1.10.1.min.js'?>"><\/script>')</script>
	<script src="<?php echo base_url().'/assets/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'/assets/js/main.js'?>"></script>
</body>
</html>