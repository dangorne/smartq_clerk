<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;


//mysql://b180ecb9a6f662:9f35cfa2@us-cdbr-iron-east-05.cleardb.net/heroku_3541019aea969af?reconnect=true

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'us-cdbr-iron-east-05.cleardb.net',
	'username' => 'b0252b3bd12aea',
	'password' => '25e21810',
	'database' => 'heroku_bb9292562ff9dbe',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
