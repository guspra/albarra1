<!-- <div class="content">
	<div class="container">
		<h2>Produk <?php echo $category->name ?></h2>
		<hr>
			<?php $counter = 1; ?>
		 	<?php foreach ($products as $product): ?>
		 		<?php if($counter % 4 == 1) echo "<div class='row'>" ?>
				<a href = "<?php echo site_url('product_front/detail/'.$product->id) ?>">
					<div class="span3 produk">
						<img src="<?php echo $product->image_url() ?>"  alt="" height=auto width="250">
						<p><?php echo $product->description ?></p>
						<span class="harga">
							<?php echo rupiah($product->price) ?>
						</span>
					</div>
				</a>
				<?php $counter++; ?>
				<?php if($counter % 4 == 1) echo "</div>" ?>
			<?php endforeach ?>
		
	</div>
</div> -->

<div class="span10 popular_products">
	<h4><span class="product-header">Produk <?php echo $category->name ?></span></h4>
	<br>                
	<ul class="thumbnails">
                        <?php foreach ($products as $product): ?>

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