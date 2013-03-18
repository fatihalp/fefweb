<?php 
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'fatihalp.com',
		'login' => 'fatihalp_1',
		'password' => '236330',
		'database' => 'fatihalp_fefweb2',
		'prefix' => '',
		'encoding' => 'utf8', 
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
		 'encoding' => 'utf8',
	);
}
