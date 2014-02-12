<?php

class Address extends Activerecord\Model
{
	static $table_name = 'address';
	static $belongs_to = array( array('user'));
}