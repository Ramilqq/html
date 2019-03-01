<?php
namespace App\Controllers;
use App\View\View;
use App\Model\News;
use App\Controller;

class AdminAdd extends Controller{

	protected $dbh;

	public function handle (){
		include __DIR__ . "/../../templates/adminadd.php";
	}
}