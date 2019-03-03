<?php
namespace App;

use App\Db;

abstract class Model 
{
	const TABLE = '';

	public static function expend()
	{
		$db = new Db();
		return  $db -> query ('select * from ' . static::TABLE . ' ' . 'ORDER BY id DESC' .';' ,[] , static::class);
	}

	public static function expendStr()
	{
		$db = new Db();
		return  $db -> query ('select * from ' . static::TABLE . ' '.'where id=:id' . ';' ,
			[':id' => $_GET['id']] , 
			static::class);
	}

	public function insert()
	{
		$a = get_object_vars($this);
		$name = [];
		$body = [];
		foreach ($a as $key => $value) {
			if ($key == 'id' || $value == NULL) {
				continue;
			}

			$name[] = $key;
			$body[':' . $key] = $value;
		}
		$sql ='
		INSERT INTO ' . static::TABLE . ' 
		(' . implode(',', $name) .')'. ' 
		VALUES (' . implode(',', array_keys($body) ) . ');'; 
#echo $sql;

		$db = new Db();
		$db -> extend($sql,$body);
	}

	public static function expendFind(string $log)
	{
		$db = new Db();
		return  $db -> query ('select * from ' . static::TABLE . ' '.'where '. $log.'=:id' . ';' ,
			[':id' => $_POST[$log]] , 
			static::class);
	}
}