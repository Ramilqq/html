<?php
namespace App\Model;

use App\Model;

class Users extends Model
{
	const TABLE = "users";
	public $id;
	public $login;
	public $email;
	public $passvord;
}
