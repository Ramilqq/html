<?php
$pathSession=__DIR__.'/session';
session_save_path($pathSession);
session_name('foo');
session_name('admin');
session_start(['cookie_lifetime' => 86400]);

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