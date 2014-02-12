<!-- <div class="content">
	<div class="container">
		<h3>Produk Pilihan</h3>
		<div class="row">
			<?php foreach ($featured_products as $product): ?>
				<a href = "<?php echo site_url('product_front/detail/'.$product->id) ?>">
					<div class="span3 produk">
						<img src="<?php echo $product->image_url() ?>"  alt="" height=auto width="250">
						<p>
							<?php echo $product->description ?>
						</p>
						<span class="harga"><?php echo rupiah($product->price) ?></span>
					</div>
				</a>
			<?php endforeach ?>
		</div>

		<hr>
		<h3>Produk Terbaru </h3>
		<div class="row">
			<?php foreach ($latest_products as $product): ?>
				<a href = "<?php echo site_url('product_front/detail/'.$product->id) ?>">
					<div class="span3 produk">
						<img src="<?php echo $product->image_url() ?>"  alt="" height=auto width="250" >
						<p>
							<?php echo $product->description ?>
						</p>
						<span class="harga"><?php echo rupiah($product->price) ?></span>
					</div>
				</a>
			<?php endforeach ?>
		</div>
	</div>
</div> -->






<!--  <div class="span9">

                    <div id="myCarousel" class="carousel slide" data-interval='3000'>
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img alt="" src="<?php echo base_url().'/assets/img/product-2-big.jpg'?>                
                                " />
                                <div class="carousel-caption">
                                    <h4>First Thumbnail label</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud.
                                    </p>
                                </div>

                            </div>
                            <div class="item">
                                <img alt="" src="<?php echo base_url().'/assets/img/product-1-big.jpg'?>                
                                " />
                                <div class="carousel-caption">
                                    <h4>Second Thumbnail label</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <img alt="" src="<?php echo base_url().'/assets/img/product-3-big.jpg'?>                
                                " />
                                <div class="carousel-caption">
                                    <h4>Third Thumbnail label</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                    </div>

                </div> -->

                

                <div class="span10 popular_products">
                    <h4><span class="product-header">Produk Recomended</span></h4>
                    <br>                
                    <ul class="thumbnails">
                        <?php foreach ($featured_products as $product): ?>

                            <li class="span2">
                                <div class="thumbnail">
                                    <a href="<?php echo site_url('product_front/detail/'.$product->id) ?>">
                                        <img class="resize" alt="" src="<?php echo $product->image_url() ?>"  alt="" height=auto width="250" />
                                    </a>
                                    <div class="caption">
                                        <a href="<?php echo site_url('product_front/detail/'.$product->id) ?>">
                                            <h5><?php echo $product->name ?></h5>
                                        </a>
                                        Harga: <span><?php echo rupiah($product->price) ?></span>
                                        <br>                            
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>

                       <!--  <li class="span2">
                            <div class="thumbnail">
                                <a href="product.html">
                                    <img alt="" src="<?php echo base_url().'/assets/img/product-3-small.jpg'?>" /></a>
                                <div class="caption">
                                    <a href="product.html">
                                        <h5>Title One</h5>
                                    </a>
                                    Price: $50.00
                                    <br>                
                                    <br></div>
                            </div>
                        </li> -->

                    </ul>
                </div>

                 <div class="span10 offset3 popular_products">
                    <h4><span class="product-header">Produk Terbaru</span></h4>
                    <br>                
                    <ul class="thumbnails">
                        <?php foreach ($latest_products as $product): ?>

                            <li class="span2">
                                <div class="thumbnail">
                                    <a href="<?php echo site_url('product_front/detail/'.$product->id) ?>">
                                        <img class="resize" alt="" src="<?php echo $product->image_url() ?>"  alt=""  height=auto width="250" />
                                    </a>
                                    <div class="caption">
                                        <a href="<?php echo site_url('product_front/detail/'.$product->id) ?>">
                                            <h5><?php echo $product->name ?></h5>
                                        </a>
                                        Harga: <span><?php echo rupiah($product->price) ?></span>
                                        <br>                            
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>

                       <!--  <li class="span2">
                            <div class="thumbnail">
                                <a href="product.html">
                                    <img alt="" src="<?php echo base_url().'/assets/img/product-3-small.jpg'?>" /></a>
                                <div class="caption">
                                    <a href="product.html">
                                        <h5>Title One</h5>
                                    </a>
                                    Price: $50.00
                                    <br>                
                                    <br></div>
                            </div>
                        </li> -->

                    </ul>
                </div>
