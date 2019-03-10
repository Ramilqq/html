<?php
namespace App;

use App\Model;

class Session {
	#protected $cookie=[];

	function getcookie ():bool{
		if ($_COOKIE):
			return true;
		else:
			return false;
		endif;
	}

	public static function getcookiedb($id){
		$qwe = \App\Model\Session::expendID($id);
		foreach ($qwe as $itemid) {
			$cookie = $itemid -> cookie;
		}
		return $cookie;
	}

	public static function setcookie($name, $key){

		session_name($name);
		session_id($key);
		session_start(['cookie_lifetime' => 86400]);
	}

	public static function chekcookie(){
		if ($_COOKIE[$name]!=$id):
			setcookie("user", 'session_id', time()- 3888600); 
			$session = \App\Model\Users::delete(19);
			echo 1;
		else :
			echo 2;
		endif;
	}
}