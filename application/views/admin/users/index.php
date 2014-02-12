<div class="content">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="#">Dashboard</a> <span class="divider">/</span></li>
			  <li class="active">Users</li>
			</ul>
			<!-- <div class="row">
				<div class="span12">
					<a href="<?php echo site_url('admin/users/add') ?>" class="btn btn-success pull-right">Tambah Users</a>
				</div>
			</div> -->
			<hr>
			<table class="table table-bordered">
				<tr>
					<!-- <th>id </th> -->
					<th>Name</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
				
				<?php foreach ($users as $user): ?>
				
					<tr>
						<!-- <td><?php echo $user->id ?></td> -->
						<td><?php echo $user->name?></td>
						<td><?php echo $user->pass?></td>
						<td>
							<a href="<?php echo site_url('admin/users/edit/'.$user->id) ?>" class="btn  btn-mini btn-block">edit</a>
							<!-- <a href="<?php echo site_url('admin/users/destroy/'.$user->id) ?>" class="btn  btn-mini btn-block btn-danger">delete</a> -->
						</td>
					</tr>

				<?php endforeach; ?>
				
			</table>
		</div>
	</div>