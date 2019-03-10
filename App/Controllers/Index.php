<?php
namespace App\Controllers;
use App\View\View;
use App\Model\News;
use App\Controller;

class Index extends Controller{

	protected $dbh;

	public function handle (){
		$this -> view -> news = News::expend();
		$this -> view -> display(__DIR__ . "/../../templates/index.php");
	}
	public function login (){
		$this -> view -> display(__DIR__ . "/../../templates/authorization.php");
	}
}