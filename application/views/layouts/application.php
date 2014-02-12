<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Albarra</title>
	
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
	<div id="cara-order" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Cara Order</h3>
		</div>
		<div class="modal-body">
			<p>
				Pilih barang yang diinginkan, silahkan transfer DP 50% dari nilai transaksi, lalu
				sisanya bisa dibayarkan ditempat saat barang sampai
			</p>
			<p>
				Silahkan SMS / BBM / Email / Chat Yahoo Messenger / Hubungi Facebook kami dan catat nama 
				produk yang akan di beli, Kami akan segera melayani pesanan anda, dan barang-barang yang 
				dipesan akan diantar oleh kurir kami.
			</p>
		</div>
	</div>

	<div id="about" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Tentang Kami</h3>
		</div>
		<div class="modal-body">
			<p>
				<h5>Albarra Furniture</h5> 
				Toko furniture yang dapat memenuhi kebutuhan interior dan eksterior rumah anda sesuai budget dan
				model yang anda inginkan
			</p>	
			<p>
				Melayani pesanan by online, atau datang langsung ke toko dan workshop kami
			</p>
			<p>
			</p>
		</div>
	</div>

	<div id="contact" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Contact</h3>
		</div>
		<div class="modal-body">
			<div class="rows">              
                        <table class="table table-hover">
                        	<tr class="success">
                        		<td>HP</td>
                        		<td>085888997742 / 081802931919</td>
                        	</tr>
                        	<tr class="error">
                        		<td>BBM</td>
                        		<td>25752EAD</td>
                        	</tr>
                        	<tr class="warning">
                        		<td>E-mail</td>
                        		<td>rhiqie@gmail.com</td>
                        	</tr>
                        	<tr class="info">
                        		<td>Facebook</td>
                        		<td><a href="https://www.facebook.com/rhi3a">
                            			<img src="<?php echo base_url().'/assets/img/ico-facebook.png'?>" alt="">
                           				 <span>FACEBOOK</span>
                       				 </a>
                       			</td>
                        		
                        	</tr>
                        	<tr class="success">
                        		<td>Alamat</td>
                        		<td>
                        			Jalan Kencana 2 no 10, Tanah Sareal, Bogor
                       			</td>
                        		
                        	</tr>
                        	
                        </table>	
            </div>
		</div>
	</div>
	<!-- End of Modal -->

	<nav class="user-nav">
		<div class="container">
			<ul>
				<!-- <li><marquee><?php echo $this->session->flashdata('msg_content');?></marquee></li> -->
				<li> <marquee width = "200px">	Selamat Datang </marquee> </li>
				<li> <a href="<?php echo site_url('login') ?>" class="btn btn-info btn-mini">Login Admin</a></li>
				<!-- <li>
					<a href="#Login" data-toggle="modal">Log In</a>/
					<a href="#SignUp" data-toggle="modal">Sign Up</a>
				</li>
				<li>
					<div class="icon-shopping-cart icon-white"></div>
					<?php echo anchor('/hello/cart', 'Cart 0');?>
				</li> -->
			</ul>

		</div>
	</nav>

	<header>
		<div class="container">
			<div class="row">
					<div class="span4">
						<img class="img-circle" src="<?php echo base_url().'/assets/img/logo.png' ?>"  alt="">
					</div>
					<div class="span8">
						<nav class="main-nav">
							<ul>
								<li><?php echo anchor('/home', 'Home');?></li>
								<li><a href="#cara-order" data-toggle="modal">Cara Order</a></li>
								<li><a href="#contact" data-toggle="modal">Contact</a></li>
								<li><a href="#about" data-toggle="modal">About</a></li>
							</ul>
						</nav>
					</div>
			</div>
			
			
		</div>
	</header>

	




<div class="content">
    <div class="container-plus">
        <div class="row">
                <!-- Start Sidebar -->
                <div class="span3 leftbar">
                    <ul class="nav nav-pills nav-stacked">
                      <li class="nav-header">Kategori Produk</li>
                      <!-- <li><a href="#">Lemari</a></li>
                      <li class="active"><a href="#">Buffet TV</a></li>
                      <li><a href="#">Custom Furniture</a></li> -->
                      <?php foreach ($categories as $category): ?>
                        <li><a href="<?php echo site_url('product_front/category/'.$category->id) ?>"><?php echo $category->name ?></a></li>
                      <?php endforeach ?>

                      <li><hr></li>
                      <li><FONT FACE="courier" class="nav-header">Chat Kami :</FONT></li>
                      <li>
                      	<a href = 'ymsgr:sendim?rina_riri'>
						  <img src="http://opi.yahoo.com/online?u=rina_riri&m=g&t=14" border=0></a>
						</li>
                    </ul>
                </div>
                
                <!-- End Sidebar -->
                
               <?php $this->load->view($body); ?>
                
        </div>
    </div>
</div>





<footer>
		<div class="container">
			<div class="row">
				<div class="span12">
					<!-- <a href="https://www.facebook.com/rhi3a" class="social">
						<img src="<?php echo base_url().'/assets/img/ico-facebook.png'?>" alt="">
						<span>FACEBOOK</span>
					</a> -->
					<!-- <a href="" class="social">
						<img src="<?php echo base_url().'/assets/img/ico-twitter.png'?>" alt="">
						<span>@albarra</span>
					</a> -->
				</div>
			</div>
			<!-- <div class="row">
				<div class="span12">
					<?php echo anchor('/hello/aboutt', 'ABOUT');?>
					<span>&middot</span>
					<a href="">PRIVACY POLICY</a> 
					<span>&middot</span>
					<?php echo anchor('/hello/contact', 'CONTACT');?>
				</div>
			</div> -->
			<div class="row">
				<div class="span12">
					&copy 2013 Albarra Furniture
					<p>developed by Gus Pra</p>
				</div>
			</div>
		</div>
	</footer>
	<script>window.jQuery || document.write('<script src="<?php echo base_url().'assets/js/jquery-1.10.1.min.js'?>"><\/script>')</script>
	<script src="<?php echo base_url().'/assets/js/jquery.elevateZoom-2.5.5.min.js'?>"></script>
	<script src="<?php echo base_url().'/assets/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'/assets/js/main.js'?>"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url().'/assets/js/gmaps.js'?>"></script>
	<script src="<?php echo base_url().'/assets/js/main.js'?>"></script>
</body>
</html>