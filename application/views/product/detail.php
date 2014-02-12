<!-- 
<div class="content">
	<div class="container">
		<div class="title">
			<h2><?php echo $product->name ?></h2>
			<p><span class="label-success label">Tersedia</span></p>
		</div>

		<div class="row">
			<div class="span4">
				<img src="<?php echo base_url().'/uploads/product/'.$product->id.'/'.$product->image?>" data-zoom-image="<?php echo base_url().'/assets/img/product-2-big.jpg'?>" alt=""
					id="">
			</div>
			<div class="span8">
				<p>
					<?php echo $product->description ?>	
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

	</div>
</div>
 -->


<div class="span10 popular_products">
	<h4><span class="product-header"><?php echo $product->name ?></span></h4>
	<div class="row-fluid">
            <ul class="thumbnails">
              <li class="span12">
                <div class="thumbnail">
                  <img src="<?php echo base_url().'/uploads/product/'.$product->id.'/'.$product->image?>" alt="">
                  <div class="caption">
                  	<h4> <?php echo rupiah($product->price) ?> </h4>
                   	<p><?php echo $product->description ?>	</p>
                    	<!-- <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p> -->
                  </div>
                </div>
              </li>
            </ul>
    </div>
</div>