<?php

require_once dirname (__DIR__) . '/App/autoload.php';

$qwe = new \App\Model\News();

$qwe -> filter = $_POST['filter'];
$qwe -> tittle = $_POST['tittle'];
$qwe -> content = $_POST['content'];
$date = gmdate ("Y-m-d H:i:s",time()+10800);
$qwe -> date = $date;
$qwe -> insert();




header("Location: \index.php");