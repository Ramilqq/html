<?php
/**
 * курс 1 урок 7
 */
namespace App\View;

class View 
{
	protected $data=[];

	public function __get($name) {
		return $this -> data[$name] ?? NULL;
	}

	public function __set($name,$value) {
		return $this -> data[$name] = $value;
	}

	public function display ($temp){
		include $temp;
	}
}
