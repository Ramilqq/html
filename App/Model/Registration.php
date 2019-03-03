<?php
namespace App\Model;

use App\Model;

class Registration extends Model
{
	const TABLE = "news";
	public $id;
	public $filter;
	public $tittle;
	public $content;
	public $date;
}