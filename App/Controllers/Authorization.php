<?php
namespace App\Controllers;
use App\View\View;
use App\Model\News;
use App\Controller;

class Authorization extends Controller{

	protected $dbh;

	public function handle (){
		include __DIR__ . "/../../templates/authorization.php";
	}

	public function login (){
		$this -> view -> display(__DIR__ . "/../../templates/authorization.php");
	}
}