<?php

require_once dirname (__DIR__) . '/App/autoload.php';

use App\Session;


$login  = trim(filter_var($_POST['login']));
$password  = trim(filter_var($_POST['passvord']));


$autlog = \App\Model\Users::expendFind('login');
$autpass = \App\Model\Users::expendFind('passvord');


if (($autlog != NULL) and ($autpass != NULL)) {
	echo 'aut';
	foreach ($autlog as $item) {
		$i = $item->login;
	}
	Session::setSession('user');
}else{
	echo 'Неправельный логин или пороль';
	Session::unSetSession();
}