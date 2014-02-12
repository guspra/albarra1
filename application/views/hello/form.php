<h1>
	Input User
</h1>

<?php
	echo form_open('hello/add');
		echo "name ".form_input('name');
		echo "<br>";
		echo form_error('name');
		echo "password_crypt ".form_input('password_crypt');
		echo "<br>";
		echo form_error('password_crypt');

		echo "email ".form_input('email');

		echo "<br>";
		echo form_error('email');
		echo form_submit('add', 'AdD');
	echo form_close();
?>