<div class="content">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
			  <li class="active">Categories</li>
			</ul>
			<div class="row">
				<div class="span12">
					<a href="<?php echo site_url('admin/categories/add') ?>" class="btn btn-success pull-right">Tambah Kategori</a>
				</div>
			</div>
			<hr>
			<table class="table table-bordered">
				<tr>
					<!-- <th>id </th> -->
					<th>Nama Kategori Produk</th>
					<th>Action</th>
				</tr>
				
				<?php foreach ($categories as $key): ?>
				
					<tr>
						<!-- <td><?php echo $key->id ?></td> -->
						<td><?php echo $key->name ?></td>
						<td>
							<!-- <button class="btn  btn-mini btn-block">edit</button> -->
							<a href="<?php echo site_url('admin/categories/destroy/'.$key->id) ?>" class="btn  btn-mini btn-block btn-danger">delete</a>
					
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>