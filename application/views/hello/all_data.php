<table>
	<thead>
		<tr>
			<th>name</th>
			<th>password</th>
			<th>email</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($all as $key): ?>
			<tr>
				<td><?php echo $key->name?></td>
				<td><?php echo $key->password_crypt?></td>
				<td><?php echo $key->email?></td>
				<td>
					<?php echo anchor('hello/view_single_data/'.$key->id, 'view'); ?>
				 	<?php echo anchor('hello/editz/'.$key->id, 'edit') ?>
					<?php echo anchor('hello/delete_single_data/'.$key->id, 'delete') ?> 
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>