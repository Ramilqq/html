<?php
namespace App;

class Db {

	protected $dbh;

	function __construct (){
		include __DIR__ . '/config.php';
		$this-> dbh = new \PDO(
			'mysql:host='.$config['host'] . 
			';dbname='.$config['db']      .
			';charset=utf8'               ,
			$config['user']               , 
			$config['pass']       
		);
	}

	public function query (string $sql,array  $data=[], $class){
		$sth = ($this -> dbh) -> prepare($sql);
		$sth -> execute($data);
		return $sth-> fetchALL(\PDO::FETCH_CLASS, $class);
	}

	public function extend (string $sql, array $data){
		$sth = ($this -> dbh) -> prepare($sql);
		$sth -> execute($data);
	}
}