<?php
namespace App\Model;

use App\Model;

class Session extends Model {
	const TABLE = "session";
	public $id;
	public $cookie;
	public $expires;
}

