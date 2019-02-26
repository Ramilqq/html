<?php
namespace App\Controllers;
use App\View\View;
use App\Model\News;
use App\Controller;

class Article extends Controller{

	protected $dbh;

	public function handle (){
		$this -> view -> news = News::expendStr();
		$this -> view -> display(__DIR__ . "/../../templates/article.php");
	}
}