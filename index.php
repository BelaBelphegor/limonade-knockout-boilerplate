<?php
require_once('vendor/limonade.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function configure()
{
	$localhost = preg_match('/^localhost(:d)?/', $_SERVER['HTTP_HOST']);
	$env = $localhost ? ENV_DEVELOPMENT : ENV_PRODUCTION;
	option('env', $env);
	option('base_uri', '/');
	setlocale(LC_TIME, "fr_FR");
}

function before()
{
	layout('layouts/default_layout.php');
}

/*
* Adding routes for REST request here with dispatch() limonade function.
* Like : dispatch('/', $callback_function);
*/
function 	index_callback()
{
	return render('../public/index.html.php');
}

dispatch ('/', 'index_callback');
run();
?>
