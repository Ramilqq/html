<?php
namespace App;
use App\View\View;
use App\Model\News;

abstract class Controller {

	protected $view;

	public function __construct (){
		$this -> view =  new View();
	}

	abstract public function action ();
}