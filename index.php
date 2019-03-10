<?php
$pathSession=__DIR__.'/session';
session_save_path($pathSession);

require_once __DIR__ . '/App/autoload.php';



$cntr = $_GET['cntr'] ?? 'Index';
$class = '\App\Controllers\\' . $cntr;


try{
	$controller = new $class;
	$controller -> action();
}

catch (\Exception $error){
	echo $error -> getMessage();
}


var_dump($_COOKIE); ?><br><?php
#var_dump($_SESSION); ?><br><?php
var_dump($_REQUEST); ?><br><?php

#session_unset();


/*
$qwe = new \App\Model\Session();
$qwe -> userid = 1;
$qwe -> cookie = $_COOKIE['user'];
$qwe -> expires = gmdate ("Y-m-d H:i:s",time()+10800);
$qwe -> insert();
*/