<?php
namespace App;
use App\View\View;
use App\Model\News;

abstract class Controller {

	protected $view;

	public function __construct (){
		$this -> view =  new View();
	}

	public function access () : bool{
		$objSession = new \App\Session();
		$cookie = $objSession -> getcookie();
		if ($cookie) {
			$qwe = \App\Model\Session::expendID(1);
			foreach ($qwe as $item) {
				$b = $item -> cookie;
			}
			$session = \App\Session::setcookie('user',$b);
			return true;
		}else{
			$qwe = \App\Model\Session::expendID(1);
			foreach ($qwe as $item) {
				$b = $item -> cookie;
			}
			$session = \App\Session::setcookie('user',$b);
			return false;
		}
	}

	public function action (){
		if ($this -> access()) {
			$this -> handle();
		}
		else {
			$this -> login();
		}
	}
}