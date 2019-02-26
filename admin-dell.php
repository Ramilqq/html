<?php
$pathSession=__DIR__.'/session';
session_save_path($pathSession);
session_name('foo');
session_name('admin');
session_start(['cookie_lifetime' => 86400]);

require_once __DIR__ . '/App/autoload.php';

$qwe =  \App\Model\News::expend();






include __DIR__ . "/templates/admin-dell.php";