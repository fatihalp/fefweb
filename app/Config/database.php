<?php 
class DATABASE_CONFIG {
//http://brahms.emu.edu.tr/
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '193.140.41.91:336',
		'login' => 'brahms',
		'password' => 'mrbrahms2013',
		'database' => 'brahms2013',
		'prefix' => '',
		'encoding' => 'utf8', 
	);

	/*
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
*/
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
