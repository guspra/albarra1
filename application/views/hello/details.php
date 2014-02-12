<!-- Modal -->		
<div id="produkModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Rp 150.000</h3>
	</div>
	<div class="modal-body">
		<div class="rows">
			<div class="span3">
				<img src="<?php echo base_url().'/assets/img/product-2-big.jpg'?>" alt=""></div>
			<div class="span3">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, necessitatibus, placeat aliquam repudiandae labore autem nemo sit beatae nisi nesciunt est maxime repellendus quo esse vero ea distinctio vel voluptate.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, dolorem, aliquid, natus pariatur
				</p>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<a href="<?php echo site_url('/hello/details');?>" class="btn btn-info">More Details</a>
	</div>
</div>

<div class="content">
	<div class="container">
		<div class="title">
			<h2>Forest Green Easy Short</h2>
			<span>Tersedia</span>
		</div>

		<div class="row">
			<div class="span4">
				<img src="<?php echo base_url().'/assets/img/product-2-small.jpg'?>" data-zoom-image="<?php echo base_url().'/assets/img/product-2-big.jpg'?>" alt=""
					id="zoom">
			</div>
			<div class="span8">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, impedit, maiores, error, maxime voluptates nihil odit dolor culpa quam iusto magni provident hic quis debitis molestiae quibusdam odio ullam corrupti.
				</p>
				<p>Size:</p>
				<select name="" id="">
					<option value="">XL</option>
					<option value="">L</option>
					<option value="">S</option>
				</select>
				<p>Color:</p>
				<select name="" id="">
					<option value="">Red</option>
					<option value="">Green</option>
					<option value="">Blue</option>
				</select>
				<p>
					<button class="btn btn-primary">Add to chart</button>
				</p>
			</div>
		</div>

		<hr>
		<h4>Recomended</h4>
		<div class="row">
			<a href = "#produkModal" data-toggle="modal">
				<div class="span3 produk">
					<img src="<?php echo base_url().'/assets/img/product-2-big.jpg'?>
					" alt="">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, fugit, minus iusto commodi
					</p>
					<span class="harga">Rp 150.000</span>
				</div>
			</a>
			<a href = "#produkModal" data-toggle="modal">
				<div class="span3 produk">
					<img src="<?php echo base_url().'/assets/img/product-2-big.jpg'?>
					" alt="">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, numquam, illum incid
					</p>
					<span class="harga">Rp 150.000</span>
				</div>
			</a>
			<a href = "#produkModal" data-toggle="modal">
				<div class="span3 produk">
					<img src="<?php echo base_url().'/assets/img/product-2-big.jpg'?>
					" alt="">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, numquam, illum incid
					</p>
					<span class="harga">Rp 150.000</span>
				</div>
			</a>
			<a href = "#produkModal" data-toggle="modal">
				<div class="span3 produk">
					<img src="<?php echo base_url().'/assets/img/product-2-big.jpg'?>
					" alt="">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, numquam, illum incid
					</p>
					<span class="harga">Rp 150.000</span>
				</div>
			</a>
		</div>

	</div>
</div>
