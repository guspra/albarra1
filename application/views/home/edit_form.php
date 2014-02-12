<h1>
	Input User
</h1>

<?php
echo $coba->id;
	echo form_open('hello/edit/'.$coba->id);
	// echo form_hidden('id'.$coba->id);
		echo "name ".form_input('name');
		echo "<br>";
		echo form_error('name');
		echo "password_crypt ".form_input('password_crypt');
		echo "<br>";
		echo form_error('password_crypt');

		echo "email ".form_input('email');

		echo "<br>";
		echo form_error('email');
		echo form_submit('add', 'Add');
	echo form_close();
?>