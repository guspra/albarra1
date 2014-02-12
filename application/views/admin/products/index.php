<div class="content">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
			  <li class="active">Products</li>
			</ul>
			<div class="row">
				<div class="span12">
					<a href="<?php echo site_url('admin/products/add') ?>" class="btn btn-success pull-right">Tambah Produk</a>
				</div>
			</div>
			<hr>
			<table class="table table-bordered">
				<tr>
					<!-- <th>id </th> -->
					<th>Name</th>
					<th>Categories</th>
					<th>Product Image</th>
					<th>Description</th>
					<th>Price</th>
					<!-- <th>Stock</th> -->
					<th>Action</th>
				</tr>
				
				<?php foreach ($products as $product): ?>
				
					<tr>
						<!-- <td><?php echo $product->id ?></td> -->
						<td>
							<?php echo $product->name?>
							<?php if ($product->is_featured): ?>
								<div>
								<span class="label-success label" for='featured'>Recomended</span>
							</div>
							<?php endif ?>
							
						</td>
						<!-- <td><?php echo print_r($product->categories[0]->name) ?></td> -->
						<td><?php foreach ($product->categories as $category): ?>
							<?php echo $category->name ?> <br>
						<?php endforeach ?></td>
						<td><img src="<?php echo $product->image_url(); ?>" width="200" alt=""></td>
						<td><?php echo $product->description?></td>
						<td><?php echo rupiah($product->price)?></td>
						<!-- <td>1</td> -->
						<td>
							<a href="<?php echo site_url('admin/products/edit/'.$product->id) ?>" class="btn  btn-mini btn-block">edit</a>
							<a href="<?php echo site_url('admin/products/destroy/'.$product->id) ?>" class="btn  btn-mini btn-block btn-danger">delete</a>
						</td>
					</tr>

				<?php endforeach; ?>
				
			</table>
			<?php echo admin_pagination(new Product) ?>
		</div>
	</div>