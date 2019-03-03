<?php

require_once dirname (__DIR__) . '/App/autoload.php';

$login  = trim(filter_var($_POST['login']));
$email  = trim(filter_var($_POST['email']));
$passwordone  = trim(filter_var($_POST['passvordone']));
$passwordtwo  = trim(filter_var($_POST['passvordtwo']));

$error = false;

if (strlen($login) <= 3) {
	echo 'Логин должен быть больше 3 символов. '; $error = true;
}elseif (strpbrk($login, ',./\!@#$%^&*(){}[]|?<>+-№"~ ') != false){
	echo 'Запрещенные символы для логина ,./\!@#$%^&*(){}[]|?<>+-№"~ ';$error = true;
}elseif ($login != NULL){
	$loginDB =  \App\Model\Users::expendFind('login');
	foreach ($loginDB as $itemLogin) {
		if ($itemLogin->login == $login) {
			echo 'Такой логин существует. ';$error = true;
		}
	}
}

if (strlen($email) <= 3) {
	echo '1.Email некрректный. '; $error = true;
}elseif (strpbrk($email, ',/\!#$%^&*(){}[]|?<>+-№"~ ') != false){
	echo '2.Email некрректный. ';$error = true;
}

if (strpbrk($email, '@') == '@mail.ru'){
	$emailDB =  \App\Model\Users::expendFind('email');
	foreach ($emailDB as $itemEmail) {
		if ($itemEmail->email == $email) {
			echo 'Такая почта сущесвует. ';$error = true;
		}
	}$emailDB =NULL;
}elseif (strpbrk($email, '@') == '@gmail.com'){
	$emailDB =  \App\Model\Users::expendFind('email');
	foreach ($emailDB as $itemEmail) {
		if ($itemEmail->email == $email) {
			echo 'Такая почта сущесвует. ';$error = true;
		}
	}$emailDB =NULL;
}else{
	echo '3.Email некрректный. ';$error = true;
}

if (strlen($passwordone) <= 3) {
	echo 'Пароль должен быть больше 3 символов. '; $error = true;
}elseif ( strlen($passwordone) >= 16){
	echo 'Пароль должен быть меньше 16 символов. ';$error = true;
}elseif ( $passwordone != $passwordtwo){
	echo 'Пароль несовподает. ';$error = true;
}


if ($error != false) {
	exit;
}else{
	$qwe = new \App\Model\Users();
	$qwe -> login = $login;
	$qwe -> email = $email;
	$qwe -> passvord = $passwordone;
	$qwe -> insert();
	echo 'Все готово';
}