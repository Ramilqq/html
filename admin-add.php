<?php
$pathSession=__DIR__.'/session';
session_save_path($pathSession);
session_name('foo');
session_name('admin');
session_start(['cookie_lifetime' => 86400]);

require_once __DIR__ . '/App/autoload.php';


#$qwe =  new App\Model\News();


#$qwe -> filter = 'sport';
#$qwe -> tittle = 'новость №1';
#$qwe -> content = 'Победа сборной России';
#$qwe -> insert();
#var_dump($qwe);

include __DIR__ . "/templates/admin-add.php";