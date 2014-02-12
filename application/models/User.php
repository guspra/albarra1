<?php

class User extends ActiveRecord\Model
{
	var $password_confirmation;
	var $save_success;

	//validation 
	// static $validates_presence_of = array(
	// 	array('email'),
	// 	array('password_crypt')
	// );



	public function set_password($password, $password_confirmation){
		$this->password = $password;
		$this->password_confirmation = $password_confirmation;
		$this->validatex();
	}

	public function validatex(){
		if($this->password != $this->password_confirmation){
			 //$this->error->add('password', 'password and password confirmation missmatch');
			 $this->save_success = FALSE;
			 //$this->password_crypt = 'xxx';
		} else{
			$this->password_crypt = md5($this->password);
			$this->password = '';
			$this->save_success =  TRUE;
		}
	}
}