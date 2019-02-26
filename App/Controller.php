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
		return true;
	}


	public function action (){
		if ($this -> access()) {
			$this -> handle();
		}
		else {
			die('ERROR');
		}
	}
}