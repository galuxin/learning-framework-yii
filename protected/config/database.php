<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=movies',
	'emulatePrepare' => true,
	'username' => 'admin',
	'password' => '1234',
	'charset' => 'utf8',
	'tablePrefix' => 'n67y78g_',
);
