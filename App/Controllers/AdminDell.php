<?php
namespace App\Controllers;
use App\View\View;
use App\Model\News;
use App\Controller;

class AdminDell extends Controller{

	protected $dbh;

	public function handle (){
		$qwe =  \App\Model\News::expend();
		include __DIR__ . "/../../templates/admindell.php";
	}

	public function login (){
		$this -> view -> display(__DIR__ . "/../../templates/authorization.php");
	}
}